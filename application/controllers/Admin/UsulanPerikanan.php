<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @property UsulanPerikananModel $usulan_model
 */
class UsulanPerikanan extends CI_Controller
{
    /** @var \UsulanPerikananModel */
    public $usulan_model;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/UsulanPerikananModel', 'usulan_model');
        $this->load->database();
        $this->load->library('upload');
    }

    public function data_usulan()
    {
        $data['title'] = 'Data Usulan';
        $this->load->view('admin/perikanan/usulan.php', $data);
    }

    // Get all usulan for DataTables
    public function get_usulan()
    {
        try {
            $usulan_list = $this->usulan_model->get_all_usulan();

            $data = [];
            foreach ($usulan_list as $usulan) {
                $data[] = [
                    'id' => $usulan->id,
                    'nama_pegawai' => $usulan->nama_pegawai ?? '-',
                    'asal_pengadilan' => $usulan->pengadilan_sekarang ?? '-',
                    'pengadilan_usulan' => $usulan->pengadilan_usulan ?? '-',
                    'nomor_surat' => $usulan->nomor_surat ?? '-',
                    'tanggal_usulan' => $usulan->tanggal_usulan,
                    'tanggal_surat' => $usulan->tanggal_surat,
                    '_status_' => $usulan->_status_,
                    'tanggal_diproses' => $usulan->tanggal_diproses,
                    'keterangan_usulan' => $usulan->keterangan_usulan,
                    'keterangan_status' => $usulan->keterangan_status,
                    'berkas' => $usulan->berkas
                ];
            }

            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($data));

        } catch (Exception $e) {
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(['error' => $e->getMessage()]));
        }
    }

    // Get usulan by ID
    public function get_usulan_by_id($id)
    {
        try {
            $usulan = $this->usulan_model->get_usulan_by_id($id);

            if ($usulan) {
                $response = [
                    'id' => $usulan->id,
                    'id_pegawai' => $usulan->id_pegawai,
                    'id_pengadilan_usulan' => $usulan->id_pengadilan_usulan,
                    'nama_pegawai' => $usulan->nama_pegawai ?? '-',
                    'asal_pengadilan' => $usulan->pengadilan_sekarang ?? '-',
                    'pengadilan_usulan' => $usulan->pengadilan_usulan ?? '-',
                    'nomor_surat' => $usulan->nomor_surat,
                    'tanggal_usulan' => $usulan->tanggal_usulan,
                    'tanggal_surat' => $usulan->tanggal_surat,
                    '_status_' => $usulan->_status_,
                    'tanggal_diproses' => $usulan->tanggal_diproses,
                    'keterangan_usulan' => $usulan->keterangan_usulan,
                    'keterangan_status' => $usulan->keterangan_status,
                    'berkas' => $usulan->berkas,
                    'sumber_foto' => $usulan->sumber_foto,
                    'foto_pegawai' => $usulan->foto_pegawai
                ];
            } else {
                $response = ['error' => 'Data usulan tidak ditemukan'];
            }

            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($response));

        } catch (Exception $e) {
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(['error' => $e->getMessage()]));
        }
    }

    // Add new usulan
    public function tambah_usulan()
    {
        try {
            $this->load->library('form_validation');

            // Set validation rules
            $this->form_validation->set_rules('id_pegawai', 'Nama Pegawai', 'required');
            $this->form_validation->set_rules('id_pengadilan_usulan', 'Pengadilan Usulan', 'required');
            $this->form_validation->set_rules('tanggal_usulan', 'Tanggal Usulan', 'required');

            if ($this->form_validation->run() == FALSE) {
                $response = [
                    'status' => 'error',
                    'message' => validation_errors()
                ];
            } else {
                // Handle file upload
                $berkas_name = null;
                if (!empty($_FILES['berkas']['name'])) {
                    $config['upload_path'] = './uploads/usulan_perikanan/';
                    $config['allowed_types'] = 'pdf|doc|docx';
                    $config['max_size'] = 5120; // 5MB
                    $config['encrypt_name'] = true;

                    $this->upload->initialize($config);

                    if ($this->upload->do_upload('berkas')) {
                        $berkas_name = $this->upload->data('file_name');
                    } else {
                        throw new Exception($this->upload->display_errors());
                    }
                }

                // Prepare data
                $data = [
                    'id_pegawai' => $this->input->post('id_pegawai'),
                    'id_pengadilan_usulan' => $this->input->post('id_pengadilan_usulan'),
                    'tanggal_usulan' => $this->input->post('tanggal_usulan'),
                    'nomor_surat' => $this->input->post('nomor_surat'),
                    'tanggal_surat' => $this->input->post('tanggal_surat'),
                    'keterangan_usulan' => $this->input->post('keterangan_usulan'),
                    'berkas' => $berkas_name,
                    '_status_' => $this->input->post('_status_') ?? 'pending',
                    'keterangan_status' => $this->input->post('keterangan_status'),
                    'tanggal_diproses' => $this->input->post('tanggal_diproses')
                ];

                // Insert data
                $result = $this->usulan_model->tambah_usulan($data);

                if ($result) {
                    $response = [
                        'status' => 'success',
                        'message' => 'Data usulan berhasil ditambahkan'
                    ];
                } else {
                    $response = [
                        'status' => 'error',
                        'message' => 'Gagal menambahkan data usulan'
                    ];
                }
            }

        } catch (Exception $e) {
            $response = [
                'status' => 'error',
                'message' => $e->getMessage()
            ];
        }

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }

    // Update usulan
    public function update_usulan()
    {
        try {
            $this->load->library('form_validation');

            // Set validation rules
            $this->form_validation->set_rules('id', 'ID Usulan', 'required');
            $this->form_validation->set_rules('id_pegawai', 'Nama Pegawai', 'required');
            $this->form_validation->set_rules('id_pengadilan_usulan', 'Pengadilan Usulan', 'required');
            $this->form_validation->set_rules('tanggal_usulan', 'Tanggal Usulan', 'required');

            if ($this->form_validation->run() == FALSE) {
                $response = [
                    'status' => 'error',
                    'message' => validation_errors()
                ];
            } else {
                $id = $this->input->post('id');

                // Handle file upload if new file is provided
                $berkas_name = $this->input->post('current_berkas');
                if (!empty($_FILES['berkas']['name'])) {
                    $config['upload_path'] = './uploads/usulan_perikanan/';
                    $config['allowed_types'] = 'pdf|doc|docx';
                    $config['max_size'] = 5120; // 5MB
                    $config['encrypt_name'] = true;

                    $this->upload->initialize($config);

                    if ($this->upload->do_upload('berkas')) {
                        // Delete old file if exists
                        if ($berkas_name && file_exists('./uploads/usulan_perikanan/' . $berkas_name)) {
                            unlink('./uploads/usulan_perikanan/' . $berkas_name);
                        }
                        $berkas_name = $this->upload->data('file_name');
                    } else {
                        throw new Exception($this->upload->display_errors());
                    }
                }

                // Prepare data
                $data = [
                    'id_pegawai' => $this->input->post('id_pegawai'),
                    'id_pengadilan_usulan' => $this->input->post('id_pengadilan_usulan'),
                    'tanggal_usulan' => $this->input->post('tanggal_usulan'),
                    'nomor_surat' => $this->input->post('nomor_surat'),
                    'tanggal_surat' => $this->input->post('tanggal_surat'),
                    'keterangan_usulan' => $this->input->post('keterangan_usulan'),
                    'berkas' => $berkas_name,
                    '_status_' => $this->input->post('_status_'),
                    'keterangan_status' => $this->input->post('keterangan_status'),
                    'tanggal_diproses' => $this->input->post('tanggal_diproses')
                ];

                // Update data
                $result = $this->usulan_model->update_usulan($id, $data);

                if ($result) {
                    $response = [
                        'status' => 'success',
                        'message' => 'Data usulan berhasil diupdate'
                    ];
                } else {
                    $response = [
                        'status' => 'error',
                        'message' => 'Gagal mengupdate data usulan'
                    ];
                }
            }

        } catch (Exception $e) {
            $response = [
                'status' => 'error',
                'message' => $e->getMessage()
            ];
        }

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }

    // Delete usulan
    public function hapus_usulan($id)
    {
        try {
            // Get usulan data first to delete associated file
            $usulan = $this->usulan_model->get_usulan_by_id($id);

            if ($usulan && $usulan->berkas) {
                $file_path = './uploads/usulan_perikanan/' . $usulan->berkas;
                if (file_exists($file_path)) {
                    unlink($file_path);
                }
            }

            // Delete from database
            $result = $this->usulan_model->hapus_usulan($id);

            if ($result) {
                $response = [
                    'status' => 'success',
                    'message' => 'Data usulan berhasil dihapus'
                ];
            } else {
                $response = [
                    'status' => 'error',
                    'message' => 'Gagal menghapus data usulan'
                ];
            }

        } catch (Exception $e) {
            $response = [
                'status' => 'error',
                'message' => $e->getMessage()
            ];
        }

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }

    // Get pengadilan list for dropdown
    public function get_pengadilan_list()
    {
        try {
            $pengadilan_list = $this->usulan_model->get_pengadilan_list();

            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($pengadilan_list));

        } catch (Exception $e) {
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(['error' => $e->getMessage()]));
        }
    }

    // Get hakim list for dropdown
    public function get_hakim_list()
    {
        try {
            $hakim_list = $this->usulan_model->get_hakim_list();

            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($hakim_list));

        } catch (Exception $e) {
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(['error' => $e->getMessage()]));
        }
    }

    // Tambahkan fungsi untuk mengambil data DRP sesuai id_pegawai terpilih
    public function get_drp_by_ids()
    {
        $ids = $this->input->post('ids'); // array of id_pegawai
        if (!is_array($ids) || empty($ids)) {
            $this->output->set_content_type('application/json')
                ->set_output(json_encode(['error' => 'ID pegawai tidak valid']));
            return;
        }

        $this->db->select('d.*, h.foto as foto_pegawai, h.sumber_foto, p.nama_pengadilan as kelas_pengadilan');
        $this->db->from('drp_perikanan d');
        $this->db->join('hakim_adhoc_perikanan h', 'h.id = d.id_pegawai', 'left');
        $this->db->join('pengadilan_perikanan p', 'p.id = h.id_pengadilan', 'left');
        $this->db->where_in('d.id_pegawai', $ids);
        $result = $this->db->get()->result();

        $data = [];
        foreach ($result as $row) {
            $data[] = [
                'id' => $row->id,
                'id_pegawai' => $row->id_pegawai,
                'nama' => $row->nama,
                'nip' => $row->nip,
                'gol_ruang' => $row->gol_ruang,
                'tp_tgl_lahir' => $row->tp_tgl_lahir,
                'jenis_kelamin' => $row->jenis_kelamin,
                'isteri_suami' => $row->isteri_suami,
                'anak' => $row->anak,
                'agama' => $row->agama,
                'pendidikan' => $row->pendidikan,
                'email' => $row->email,
                'usulan' => $row->usulan,
                'hukuman' => $row->hukuman,
                'jabatan' => $row->jabatan,
                'pengadilan' => $row->pengadilan,
                'kelas_pengadilan' => $row->kelas_pengadilan,
                'riwayat_pekerjaan' => $row->riwayat_pekerjaan,
                'keterangan' => $row->keterangan,
                'foto_pegawai' => $row->foto_pegawai,
                'sumber_foto' => $row->sumber_foto
            ];
        }

        $this->output->set_content_type('application/json')
            ->set_output(json_encode($data));
    }

    public function get_drp_by_usulan_ids()
    {
        $ids = $this->input->post('ids'); // array of id usulan
        if (!is_array($ids) || empty($ids)) {
            $this->output->set_content_type('application/json')
                ->set_output(json_encode(['error' => 'ID usulan tidak valid']));
            return;
        }

        $this->db->select('
    u.id as usulan_id,
    u.id_pegawai,
    h.nama as nama_hakim,
    dp.id_pegawai as drp_id_pegawai,
    dp.nama as nama_drp,
    dp.nip,
    dp.gol_ruang,
    dp.tp_tgl_lahir,
    dp.jenis_kelamin,
    dp.isteri_suami,
    dp.anak,
    dp.agama,
    dp.pendidikan,
    dp.email,
    (SELECT nama_pengadilan FROM pengadilan_perikanan WHERE id = u.id_pengadilan_usulan) as usulan,
    dp.hukuman,
    dp.jabatan,
    dp.pengadilan,
    dp.riwayat_pekerjaan,
    dp.keterangan,
    h.foto as foto_pegawai,
    h.sumber_foto,
    p.nama_pengadilan as kelas_pengadilan
');
        $this->db->from('usulan_perikanan u');
        $this->db->join('hakim_adhoc_perikanan h', 'u.id_pegawai = h.id', 'left');
        $this->db->join('drp_perikanan dp', 'h.id = dp.id_pegawai', 'left');
        $this->db->join('pengadilan_perikanan p', 'p.id = h.id_pengadilan', 'left');
        $this->db->where_in('u.id', $ids);
        $result = $this->db->get()->result();

        $data = [];
        foreach ($result as $row) {
            $data[] = [
                'usulan_id' => $row->usulan_id,
                'id_pegawai' => $row->id_pegawai,
                'nama_hakim' => $row->nama_hakim,
                'drp_id_pegawai' => $row->drp_id_pegawai,
                'nama_drp' => $row->nama_drp,
                'nip' => $row->nip,
                'gol_ruang' => $row->gol_ruang,
                'tp_tgl_lahir' => $row->tp_tgl_lahir,
                'jenis_kelamin' => $row->jenis_kelamin,
                'isteri_suami' => $row->isteri_suami,
                'anak' => $row->anak,
                'agama' => $row->agama,
                'pendidikan' => $row->pendidikan,
                'email' => $row->email,
                'usulan' => $row->usulan,
                'hukuman' => $row->hukuman,
                'jabatan' => $row->jabatan,
                'pengadilan' => $row->pengadilan,
                'kelas_pengadilan' => $row->kelas_pengadilan,
                'riwayat_pekerjaan' => $row->riwayat_pekerjaan,
                'keterangan' => $row->keterangan,
                'foto_pegawai' => $row->foto_pegawai,
                'sumber_foto' => $row->sumber_foto
            ];
        }

        $this->output->set_content_type('application/json')
            ->set_output(json_encode($data));
    }

    // Tambahkan function ini di controller Perikanan (application/controllers/admin/Adhoc/Perikanan.php)

    public function get_image_proxy($filename)
    {
        // Daftar ekstensi yang diizinkan
        $allowed_extensions = ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'jfif'];
        $file_extension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

        if (!in_array($file_extension, $allowed_extensions)) {
            header("HTTP/1.0 400 Bad Request");
            exit('File type not allowed');
        }

        // URL gambar di server SIKEP
        $image_url = 'https://sikep.mahkamahagung.go.id/uploads/foto_pegawai/' . $filename;

        // Inisialisasi cURL
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $image_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);

        // Set user agent untuk menghindari blokir
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36');

        $image_data = curl_exec($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $content_type = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);

        curl_close($ch);

        if ($http_code === 200 && $image_data) {
            // Set header yang sesuai
            header('Content-Type: ' . $content_type);
            header('Cache-Control: public, max-age=86400'); // Cache 1 hari
            echo $image_data;
        } else {
            // Fallback ke gambar placeholder
            $placeholder_path = FCPATH . 'assets/images/placeholder.jpg';
            if (file_exists($placeholder_path)) {
                header('Content-Type: image/jpeg');
                readfile($placeholder_path);

            } else {
                header("HTTP/1.0 404 Not Found");
            }
        }
        exit;
    }

}