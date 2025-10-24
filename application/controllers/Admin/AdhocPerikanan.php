<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @property AdhocPerikananModel $adhoc_model
 */
class AdhocPerikanan extends CI_Controller
{
    /** @var \AdhocPerikananModel */
    public $adhoc_model;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/AdhocPerikananModel', 'adhoc_model');
        $this->load->database();
    }

    // Tampilkan halaman utama
    public function data_hakim()
    {
        $data = ["title" => 'AdHoc Perikanan'];
        $this->load->view('admin/perikanan/data_hakim', $data);
    }

    // Ambil data hakim (join pengadilan)
    public function get_data()
    {
        $data = $this->adhoc_model->get_join_data();
        header('Content-Type: application/json');
        echo json_encode($data);
    }

    // Ambil data pengadilan untuk select option
    public function get_pengadilan()
    {
        $query = $this->db->get('pengadilan_perikanan');
        header('Content-Type: application/json');
        echo json_encode($query->result());
    }

    // Proses tambah hakim baru
    public function tambah_hakim()
    {
        $data = $this->input->post();

        // Proses upload foto
        if (!empty($_FILES['foto']['name'])) {
            // Konfigurasi upload
            $config['upload_path'] = './uploads/foto_hakim/';  // Pastikan folder ada dan writable
            $config['allowed_types'] = 'jpg|jpeg|png';  // Hanya izinkan tipe gambar
            $config['max_size'] = 2048;  // Maksimal 2MB
            $config['file_name'] = uniqid() . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $_FILES['foto']['name']);  // Nama file unik dan aman
            $config['overwrite'] = FALSE;  // Jangan overwrite file yang ada

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto')) {
                $uploadData = $this->upload->data();
                // Validasi tambahan: Periksa MIME type untuk keamanan
                $allowedMimeTypes = ['image/jpeg', 'image/png'];
                if (!in_array($uploadData['file_type'], $allowedMimeTypes)) {
                    // Hapus file yang diupload jika MIME tidak valid
                    unlink($uploadData['full_path']);
                    echo json_encode(['error' => 'Tipe file tidak diizinkan.']);
                    return;
                }

                $data['foto'] = $uploadData['file_name'];  // Simpan hanya nama file
            } else {
                // Kirim error upload ke frontend
                echo json_encode(['error' => $this->upload->display_errors('', '')]);
                return;
            }
        }


        // Simpan data ke database
        $insert = $this->adhoc_model->insert_data($data);
        if ($insert) {
            // Tambah jumlah_adhoc_sekarang di pengadilan
            if (!empty($data['id_pengadilan'])) {
                $this->db->set('jumlah_adhoc_sekarang', 'jumlah_adhoc_sekarang+1', FALSE)
                    ->where('id', $data['id_pengadilan'])
                    ->update('pengadilan_perikanan');
            }
            echo json_encode(['success' => true]);
        } else {
            // Kirim error ke frontend dengan pesan errornya
            echo json_encode(['error' => 'Gagal insert data']);
        }
    }

    // Ambil data hakim by id (untuk edit) dan Join dengan pengadilan
    public function get_data_by_id($id)
    {
        $data = $this->adhoc_model->get_data_by_id($id);
        header('Content-Type: application/json');
        echo json_encode($data);
    }

    // Proses update data hakim
    public function update_hakim()
    {
        $id = $this->input->post('id');
        $data = $this->input->post();

        // Ambil data lama hakim
        $old = $this->adhoc_model->get_data_by_id($id);
        $old_pengadilan = $old ? $old->id_pengadilan : null;
        $new_pengadilan = isset($data['id_pengadilan']) ? $data['id_pengadilan'] : null;

        // Proses upload foto jika ada
        if (!empty($_FILES['foto']['name'])) {
            $config['upload_path'] = './uploads/foto_hakim/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = 2048;
            $config['file_name'] = uniqid() . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $_FILES['foto']['name']);
            $config['overwrite'] = FALSE;
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto')) {
                $uploadData = $this->upload->data();
                $allowedMimeTypes = ['image/jpeg', 'image/png'];
                if (!in_array($uploadData['file_type'], $allowedMimeTypes)) {
                    unlink($uploadData['full_path']);
                    echo json_encode(['error' => 'Tipe file tidak diizinkan.']);
                    return;
                }
                $data['foto'] = $uploadData['file_name'];
            } else {
                echo json_encode(['error' => $this->upload->display_errors('', '')]);
                return;
            }
        }

        unset($data['id']); // Jangan update id
        $update = $this->adhoc_model->update_data($id, $data);
        if ($update) {
            // Jika pengadilan berubah
            if ($old_pengadilan && $new_pengadilan && $old_pengadilan != $new_pengadilan) {
                $this->db->set('jumlah_adhoc_sekarang', 'jumlah_adhoc_sekarang-1', FALSE)
                    ->where('id', $old_pengadilan)
                    ->update('pengadilan_perikanan');
                $this->db->set('jumlah_adhoc_sekarang', 'jumlah_adhoc_sekarang+1', FALSE)
                    ->where('id', $new_pengadilan)
                    ->update('pengadilan_perikanan');
            }
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['error' => 'Gagal update data']);
        }
    }

    // Proses hapus data hakim
    public function hapus_hakim()
    {
        $id = $this->input->post('id');
        // Ambil data lama untuk hapus file foto jika ada
        $data = $this->adhoc_model->get_data_by_id($id);
        $deleted = $this->adhoc_model->delete_data($id);

        if ($deleted) {
            // Hapus file foto jika ada dan file ada di server
            if (!empty($data->foto)) {
                $foto_path = FCPATH . 'uploads/foto_hakim/' . $data->foto;
                if (file_exists($foto_path)) {
                    @unlink($foto_path);
                }
            }
            // Kurangi jumlah_adhoc_sekarang di pengadilan
            if (!empty($data->id_pengadilan)) {
                $this->db->set('jumlah_adhoc_sekarang', 'jumlah_adhoc_sekarang-1', FALSE)
                    ->where('id', $data->id_pengadilan)
                    ->update('pengadilan_perikanan');
            }
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['error' => 'Gagal menghapus data']);
        }
    }

    // Proses simpan usulan
    public function simpan_usulan()
    {
        $data = $this->input->post();

        // Set tanggal usulan ke hari ini
        $data['tanggal_usulan'] = date('Y-m-d');

        // Proses upload berkas jika ada
        if (!empty($_FILES['berkas']['name'])) {
            $config['upload_path'] = './uploads/usulan_perikanan/';
            $config['allowed_types'] = 'pdf|doc|docx|jpg|jpeg|png';
            $config['max_size'] = 5120; // 5MB
            $config['file_name'] = uniqid() . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $_FILES['berkas']['name']);
            $config['overwrite'] = FALSE;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('berkas')) {
                $uploadData = $this->upload->data();
                $data['berkas'] = $uploadData['file_name'];
            } else {
                echo json_encode(['error' => $this->upload->display_errors('', '')]);
                return;
            }
        }

        // Simpan ke tabel usulan_perikanan
        $insert = $this->db->insert('usulan_perikanan', $data);

        if ($insert) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['error' => 'Gagal menyimpan usulan']);
        }
    }

    // Proses mutasi hakim
    public function mutasi_hakim()
    {
        $data = $this->input->post();

        // Validasi data
        if (empty($data['id_pegawai']) || empty($data['id_pengadilan_hasil_tpm'])) {
            echo json_encode(['error' => 'Data wajib tidak lengkap']);
            return;
        }

        // Ambil data hakim saat ini
        $hakim = $this->adhoc_model->get_data_by_id($data['id_pegawai']);
        if (!$hakim) {
            echo json_encode(['error' => 'Data hakim tidak ditemukan']);
            return;
        }

        // Set pengadilan asal
        $data['id_pengadilan_asal'] = $hakim->id_pengadilan;

        // Simpan data mutasi
        $insert = $this->db->insert('mutasi_perikanan', $data);

        if ($insert) {
            // Update pengadilan hakim ke tujuan
            $update_hakim = $this->db->where('id', $data['id_pegawai'])
                ->update('hakim_adhoc_perikanan', [
                    'id_pengadilan' => $data['id_pengadilan_hasil_tpm']
                ]);

            if ($update_hakim) {
                // Update jumlah hakim di pengadilan asal (dikurangi)
                $this->db->set('jumlah_adhoc_sekarang', 'jumlah_adhoc_sekarang-1', FALSE)
                    ->where('id', $hakim->id_pengadilan)
                    ->update('pengadilan_perikanan');

                // Update jumlah hakim di pengadilan tujuan (ditambah)
                $this->db->set('jumlah_adhoc_sekarang', 'jumlah_adhoc_sekarang+1', FALSE)
                    ->where('id', $data['id_pengadilan_hasil_tpm'])
                    ->update('pengadilan_perikanan');

                echo json_encode(['success' => true]);
            } else {
                // Rollback jika gagal update hakim
                $this->db->where('id', $this->db->insert_id())->delete('mutasi_perikanan');
                echo json_encode(['error' => 'Gagal update data hakim']);
            }
        } else {
            echo json_encode(['error' => 'Gagal menyimpan data mutasi']);
        }
    }

    // Ambil data mutasi by id hakim
    public function get_mutasi_by_hakim($id_hakim)
    {
        $this->db->select('m.*, 
        pa.nama_pengadilan as pengadilan_asal,
        pt.nama_pengadilan as pengadilan_tujuan,
        h.nama as nama_hakim, h.nip_nrp'
        );
        $this->db->from('mutasi_perikanan m');
        $this->db->join('hakim_adhoc_perikanan h', 'm.id_pegawai = h.id', 'left');
        $this->db->join('pengadilan_perikanan pa', 'm.id_pengadilan_asal = pa.id', 'left');
        $this->db->join('pengadilan_perikanan pt', 'm.id_pengadilan_hasil_tpm = pt.id', 'left');
        $this->db->where('m.id_pegawai', $id_hakim);
        $this->db->order_by('m.tanggal_tpm', 'DESC');

        $query = $this->db->get();
        $data = $query->result();

        header('Content-Type: application/json');
        echo json_encode($data);
    }
}