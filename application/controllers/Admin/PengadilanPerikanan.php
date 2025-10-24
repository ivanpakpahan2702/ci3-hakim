<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @property PengadilanPerikananModel $pengadilan_model
 */
class PengadilanPerikanan extends CI_Controller
{
    /** @var \PengadilanPerikananModel */
    public $pengadilan_model;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/PengadilanPerikananModel', 'pengadilan_model');
        $this->load->database();
        $this->load->library('upload');
    }

    // Tampilkan halaman utama
    public function data_pengadilan()
    {
        $data = ["title" => 'Pengadilan Perikanan'];
        $this->load->view('admin/perikanan/data_pengadilan', $data);
    }

    // Ambil data untuk DataTables
    public function get_data_pengadilan()
    {
        try {
            $data = $this->pengadilan_model->get_datatables();
            echo json_encode($data);
        } catch (Exception $e) {
            echo json_encode(['error' => 'Gagal mengambil data: ' . $e->getMessage()]);
        }
    }

    // Ambil data pengadilan by ID untuk edit
    public function get_pengadilan_by_id($id)
    {
        try {
            $data = $this->pengadilan_model->get_data_by_id($id);
            if ($data) {
                // Tambahkan field carousel_processed jika diperlukan
                if (!empty($data->carousel)) {
                    $carousel_images = explode(',', $data->carousel);
                    $data->carousel_processed = [];

                    foreach ($carousel_images as $image) {
                        $image = trim($image);
                        if (!empty($image)) {
                            $data->carousel_processed[] = [
                                'filename' => $image,
                                'url' => base_url('uploads/carousel_pengadilan/' . $image)
                            ];
                        }
                    }
                } else {
                    $data->carousel_processed = [];
                }

                echo json_encode($data);
            } else {
                echo json_encode(['error' => 'Data tidak ditemukan']);
            }
        } catch (Exception $e) {
            echo json_encode(['error' => 'Gagal mengambil data: ' . $e->getMessage()]);
        }
    }

    // Tambah data pengadilan baru
    public function tambah_pengadilan()
    {
        header('Content-Type: application/json');

        try {
            $data = $this->input->post();

            // Validasi required fields
            if (empty($data['nama_pengadilan']) || empty($data['kelas']) || empty($data['wilayah'])) {
                echo json_encode(['success' => false, 'error' => 'Nama Pengadilan, Kelas, dan Wilayah harus diisi']);
                return;
            }

            // Proses upload carousel gambar
            $carousel_names = [];
            if (!empty($_FILES['carousel']['name'][0])) {
                $upload_result = $this->upload_carousel_images($_FILES['carousel']);
                if ($upload_result['success']) {
                    $carousel_names = $upload_result['file_names'];
                } else {
                    echo json_encode(['success' => false, 'error' => 'Error upload gambar: ' . $upload_result['error']]);
                    return;
                }
            }

            if (!empty($carousel_names)) {
                $data['carousel'] = implode(',', $carousel_names);
            }

            $insert = $this->pengadilan_model->insert_data($data);
            if ($insert) {
                echo json_encode(['success' => true, 'message' => 'Data berhasil ditambahkan']);
            } else {
                echo json_encode(['success' => false, 'error' => 'Gagal menambahkan data ke database']);
            }
        } catch (Exception $e) {
            error_log('Error in tambah_pengadilan: ' . $e->getMessage());
            echo json_encode(['success' => false, 'error' => 'Terjadi kesalahan: ' . $e->getMessage()]);
        }
    }

    // Update data pengadilan
    public function update_pengadilan()
    {
        header('Content-Type: application/json');

        try {
            $id = $this->input->post('id');
            $data = $this->input->post();

            // Validasi ID
            if (empty($id)) {
                echo json_encode(['success' => false, 'error' => 'ID tidak valid']);
                return;
            }

            // Validasi required fields
            if (empty($data['nama_pengadilan']) || empty($data['kelas']) || empty($data['wilayah'])) {
                echo json_encode(['success' => false, 'error' => 'Nama Pengadilan, Kelas, dan Wilayah harus diisi']);
                return;
            }

            // Hapus field yang tidak perlu diupdate ke database
            unset($data['id']);

            // Handle delete_images separately
            $delete_images = $this->input->post('delete_images');
            unset($data['delete_images']);

            // Ambil data pengadilan yang lama untuk mendapatkan carousel yang ada
            $old_data = $this->pengadilan_model->get_data_by_id($id);
            if (!$old_data) {
                echo json_encode(['success' => false, 'error' => 'Data tidak ditemukan']);
                return;
            }

            $current_carousel = $old_data->carousel ?? '';

            // Proses penghapusan gambar yang dipilih
            if (!empty($delete_images)) {
                $current_images = !empty($current_carousel) ? explode(',', $current_carousel) : [];
                $updated_images = array_diff($current_images, $delete_images);

                // Hapus file fisik dari server
                foreach ($delete_images as $image_to_delete) {
                    $file_path = FCPATH . 'uploads/carousel_pengadilan/' . $image_to_delete;
                    if (file_exists($file_path) && is_file($file_path)) {
                        unlink($file_path);
                    }
                }

                $current_carousel = implode(',', $updated_images);
            }

            // Proses upload gambar baru
            $new_carousel_names = [];
            if (!empty($_FILES['carousel']['name'][0])) {
                $upload_result = $this->upload_carousel_images($_FILES['carousel']);
                if ($upload_result['success']) {
                    $new_carousel_names = $upload_result['file_names'];
                } else {
                    // Tidak return error, hanya log karena upload gambar bukan mandatory
                    error_log('Upload error: ' . $upload_result['error']);
                }
            }

            // Gabungkan gambar lama (yang tidak dihapus) dengan gambar baru
            $final_carousel = '';
            if (!empty($current_carousel) && !empty($new_carousel_names)) {
                $final_carousel = $current_carousel . ',' . implode(',', $new_carousel_names);
            } elseif (!empty($current_carousel)) {
                $final_carousel = $current_carousel;
            } elseif (!empty($new_carousel_names)) {
                $final_carousel = implode(',', $new_carousel_names);
            }

            // Update field carousel jika ada perubahan
            if ($final_carousel !== '') {
                $data['carousel'] = $final_carousel;
            } else {
                // Jika semua gambar dihapus, set carousel menjadi empty string
                $data['carousel'] = '';
            }

            $update = $this->pengadilan_model->update_data($id, $data);
            if ($update) {
                echo json_encode(['success' => true, 'message' => 'Data berhasil diupdate']);
            } else {
                echo json_encode(['success' => false, 'error' => 'Gagal mengupdate data di database']);
            }
        } catch (Exception $e) {
            error_log('Error in update_pengadilan: ' . $e->getMessage());
            echo json_encode(['success' => false, 'error' => 'Terjadi kesalahan: ' . $e->getMessage()]);
        }
    }

    // Hapus data pengadilan
    public function hapus_pengadilan()
    {
        header('Content-Type: application/json');

        try {
            $id = $this->input->post('id');

            if (empty($id)) {
                echo json_encode(['success' => false, 'error' => 'ID tidak valid']);
                return;
            }

            // Ambil data untuk menghapus file carousel
            $data = $this->pengadilan_model->get_data_by_id($id);
            if ($data && !empty($data->carousel)) {
                $carousel_images = explode(',', $data->carousel);
                foreach ($carousel_images as $image) {
                    $file_path = FCPATH . 'uploads/carousel_pengadilan/' . trim($image);
                    if (file_exists($file_path) && is_file($file_path)) {
                        unlink($file_path);
                    }
                }
            }

            $delete = $this->pengadilan_model->delete_data($id);
            if ($delete) {
                echo json_encode(['success' => true, 'message' => 'Data berhasil dihapus']);
            } else {
                echo json_encode(['success' => false, 'error' => 'Gagal menghapus data']);
            }
        } catch (Exception $e) {
            error_log('Error in hapus_pengadilan: ' . $e->getMessage());
            echo json_encode(['success' => false, 'error' => 'Terjadi kesalahan: ' . $e->getMessage()]);
        }
    }

    // Ambil data pengadilan untuk dropdown
    public function get_pengadilan()
    {
        header('Content-Type: application/json');

        try {
            $data = $this->pengadilan_model->get_all_data();
            echo json_encode($data);
        } catch (Exception $e) {
            echo json_encode(['success' => false, 'error' => 'Gagal mengambil data']);
        }
    }

    // Fungsi helper untuk upload gambar carousel
    private function upload_carousel_images($files)
    {
        $upload_path = FCPATH . 'uploads/carousel_pengadilan/';
        $file_names = [];

        // Buat folder jika belum ada
        if (!is_dir($upload_path)) {
            mkdir($upload_path, 0777, true);
        }

        $count = count($files['name']);

        for ($i = 0; $i < $count; $i++) {
            if ($files['error'][$i] == 0) {
                $_FILES['file']['name'] = $files['name'][$i];
                $_FILES['file']['type'] = $files['type'][$i];
                $_FILES['file']['tmp_name'] = $files['tmp_name'][$i];
                $_FILES['file']['error'] = $files['error'][$i];
                $_FILES['file']['size'] = $files['size'][$i];

                $config['upload_path'] = $upload_path;
                $config['allowed_types'] = 'jpg|jpeg|png|gif|webp';
                $config['max_size'] = 2048;
                $config['file_name'] = uniqid() . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $files['name'][$i]);
                $config['overwrite'] = false;

                $this->upload->initialize($config);

                if ($this->upload->do_upload('file')) {
                    $uploadData = $this->upload->data();
                    $file_names[] = $uploadData['file_name'];
                } else {
                    return [
                        'success' => false,
                        'error' => $this->upload->display_errors()
                    ];
                }
            }
        }

        return [
            'success' => true,
            'file_names' => $file_names
        ];
    }

    // Ambil data hakim by id_pengadilan
    public function get_hakim_by_pengadilan($id_pengadilan)
    {
        header('Content-Type: application/json');

        try {
            $hakim_data = $this->pengadilan_model->get_hakim_by_pengadilan($id_pengadilan);

            // Process foto URLs
            foreach ($hakim_data as &$hakim) {

                if (!empty($hakim->foto)) {
                    if ($hakim->sumber_foto === 'sikep') {
                        $hakim->foto_url = 'https://sikep.mahkamahagung.go.id/uploads/foto_pegawai/' . $hakim->foto;
                    } else {
                        $hakim->foto_url = base_url('uploads/foto_hakim/' . $hakim->foto);
                    }
                } else {
                    $hakim->foto_url = 'https://placehold.co/800?text=Tidak+Bergambar&font=roboto';
                }
            }

            echo json_encode([
                'success' => true,
                'data' => $hakim_data
            ]);
        } catch (Exception $e) {
            echo json_encode([
                'success' => false,
                'error' => 'Gagal mengambil data hakim: ' . $e->getMessage()
            ]);
        }
    }

    // Ambil semua data hakim untuk dropdown
    public function get_all_hakim()
    {
        header('Content-Type: application/json');

        try {
            $data = $this->pengadilan_model->get_all_hakim();
            echo json_encode($data);
        } catch (Exception $e) {
            echo json_encode(['success' => false, 'error' => 'Gagal mengambil data hakim']);
        }
    }
}