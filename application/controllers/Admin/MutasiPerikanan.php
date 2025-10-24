<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @property MutasiPerikananModel $mutasi_model
 */
class MutasiPerikanan extends CI_Controller
{
    /** @var \MutasiPerikananModel */
    public $mutasi_model;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/MutasiPerikananModel', 'mutasi_model');
        $this->load->database();
        $this->load->library('upload');
    }

    public function data_mutasi()
    {
        $data['title'] = 'Data Mutasi';
        $this->load->view('admin/perikanan/mutasi.php', $data);
    }

    // Get all mutasi for DataTables
    public function get_mutasi()
    {
        try {
            $mutasi_list = $this->mutasi_model->get_all_mutasi();

            $data = [];
            foreach ($mutasi_list as $mutasi) {
                $data[] = [
                    'id' => $mutasi->id,
                    'nama_pegawai' => $mutasi->nama_pegawai ?? '-',
                    'nip_nrp' => $mutasi->nip_nrp ?? '-',
                    'jabatan' => $mutasi->jabatan ?? '-',
                    'pengadilan_asal' => $mutasi->pengadilan_asal ?? '-',
                    'pengadilan_hasil_tpm' => $mutasi->pengadilan_hasil_tpm ?? '-',
                    'periode' => $mutasi->periode ?? '-',
                    'tanggal_tpm' => $mutasi->tanggal_tpm
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

    // Get mutasi by ID
    public function get_mutasi_by_id($id)
    {
        try {
            $mutasi = $this->mutasi_model->get_mutasi_by_id($id);

            if ($mutasi) {
                $response = [
                    'id' => $mutasi->id,
                    'id_pegawai' => $mutasi->id_pegawai,
                    'id_pengadilan_asal' => $mutasi->id_pengadilan_asal,
                    'id_pengadilan_hasil_tpm' => $mutasi->id_pengadilan_hasil_tpm,
                    'nama_pegawai' => $mutasi->nama_pegawai ?? '-',
                    'pengadilan_asal' => $mutasi->pengadilan_asal ?? '-',
                    'pengadilan_hasil_tpm' => $mutasi->pengadilan_hasil_tpm ?? '-',
                    'periode' => $mutasi->periode,
                    'tanggal_tpm' => $mutasi->tanggal_tpm
                ];
            } else {
                $response = ['error' => 'Data mutasi tidak ditemukan'];
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

    // Add new mutasi
    public function tambah_mutasi()
    {
        try {
            $this->load->library('form_validation');
            // Set validation rules
            $this->form_validation->set_rules('id_pegawai', 'Nama Pegawai', 'required');
            $this->form_validation->set_rules('id_pengadilan_asal', 'Pengadilan Asal', 'required');
            $this->form_validation->set_rules('id_pengadilan_hasil_tpm', 'Pengadilan Hasil TPM', 'required');
            $this->form_validation->set_rules('periode', 'Periode', 'required');
            $this->form_validation->set_rules('tanggal_tpm', 'Tanggal TPM', 'required');

            if ($this->form_validation->run() == FALSE) {
                $response = [
                    'status' => 'error',
                    'message' => validation_errors()
                ];
            } else {
                $data = [
                    'id_pegawai' => $this->input->post('id_pegawai'),
                    'id_pengadilan_asal' => $this->input->post('id_pengadilan_asal'),
                    'id_pengadilan_hasil_tpm' => $this->input->post('id_pengadilan_hasil_tpm'),
                    'periode' => $this->input->post('periode'),
                    'tanggal_tpm' => $this->input->post('tanggal_tpm')
                ];

                $result = $this->mutasi_model->tambah_mutasi($data);

                if ($result) {
                    // Kurangi jumlah_adhoc_sekarang di pengadilan asal
                    $this->db->set('jumlah_adhoc_sekarang', 'jumlah_adhoc_sekarang-1', FALSE)
                        ->where('id', $data['id_pengadilan_asal'])
                        ->update('pengadilan_perikanan');
                    // Tambah jumlah_adhoc_sekarang di pengadilan hasil TPM
                    $this->db->set('jumlah_adhoc_sekarang', 'jumlah_adhoc_sekarang+1', FALSE)
                        ->where('id', $data['id_pengadilan_hasil_tpm'])
                        ->update('pengadilan_perikanan');
                    // Realisasi mutasi: update id_pengadilan di tabel hakim_adhoc_perikanan
                    $this->db->set('id_pengadilan', $data['id_pengadilan_hasil_tpm'])
                        ->where('id', $data['id_pegawai'])
                        ->update('hakim_adhoc_perikanan');

                    $response = [
                        'status' => 'success',
                        'message' => 'Data mutasi berhasil ditambahkan'
                    ];
                } else {
                    $response = [
                        'status' => 'error',
                        'message' => 'Gagal menambahkan data mutasi'
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

    // Update mutasi
    public function update_mutasi()
    {
        try {
            $this->load->library('form_validation');
            // Set validation rules
            $this->form_validation->set_rules('id', 'ID Mutasi', 'required');
            $this->form_validation->set_rules('id_pegawai', 'Nama Pegawai', 'required');
            $this->form_validation->set_rules('id_pengadilan_asal', 'Pengadilan Asal', 'required');
            $this->form_validation->set_rules('id_pengadilan_hasil_tpm', 'Pengadilan Hasil TPM', 'required');
            $this->form_validation->set_rules('periode', 'Periode', 'required');
            $this->form_validation->set_rules('tanggal_tpm', 'Tanggal TPM', 'required');

            if ($this->form_validation->run() == FALSE) {
                $response = [
                    'status' => 'error',
                    'message' => validation_errors()
                ];
            } else {
                $id = $this->input->post('id');
                // Ambil data lama
                $old = $this->mutasi_model->get_mutasi_by_id($id);
                $old_asal = $old ? $old->id_pengadilan_asal : null;
                $old_hasil = $old ? $old->id_pengadilan_hasil_tpm : null;
                $new_asal = $this->input->post('id_pengadilan_asal');
                $new_hasil = $this->input->post('id_pengadilan_hasil_tpm');

                $data = [
                    'id_pegawai' => $this->input->post('id_pegawai'),
                    'id_pengadilan_asal' => $new_asal,
                    'id_pengadilan_hasil_tpm' => $new_hasil,
                    'periode' => $this->input->post('periode'),
                    'tanggal_tpm' => $this->input->post('tanggal_tpm')
                ];

                $result = $this->mutasi_model->update_mutasi($id, $data);

                if ($result) {
                    // Jika pertukaran
                    if ($old_asal == $new_hasil && $old_hasil == $new_asal) {
                        // Update pengadilan asal lama
                        $this->db->set('jumlah_adhoc_sekarang', 'jumlah_adhoc_sekarang+1', FALSE)
                            ->where('id', $old_asal)
                            ->update('pengadilan_perikanan');
                        // Update pengadilan hasil TPM lama
                        $this->db->set('jumlah_adhoc_sekarang', 'jumlah_adhoc_sekarang-1', FALSE)
                            ->where('id', $old_hasil)
                            ->update('pengadilan_perikanan');
                    }

                    // Jika pengadilan asal berubah
                    else if ($old_asal && $new_asal && $old_asal != $new_asal) {
                        $this->db->set('jumlah_adhoc_sekarang', 'jumlah_adhoc_sekarang-1', FALSE)
                            ->where('id', $old_asal)
                            ->update('pengadilan_perikanan');
                        $this->db->set('jumlah_adhoc_sekarang', 'jumlah_adhoc_sekarang+1', FALSE)
                            ->where('id', $new_asal)
                            ->update('pengadilan_perikanan');
                    }
                    // Jika pengadilan hasil TPM berubah
                    else if ($old_hasil && $new_hasil && $old_hasil != $new_hasil) {
                        $this->db->set('jumlah_adhoc_sekarang', 'jumlah_adhoc_sekarang-1', FALSE)
                            ->where('id', $old_hasil)
                            ->update('pengadilan_perikanan');
                        $this->db->set('jumlah_adhoc_sekarang', 'jumlah_adhoc_sekarang+1', FALSE)
                            ->where('id', $new_hasil)
                            ->update('pengadilan_perikanan');
                    }
                    // Realisasi mutasi: update id_pengadilan di tabel hakim_adhoc_perikanan
                    $this->db->set('id_pengadilan', $new_hasil)
                        ->where('id', $data['id_pegawai'])
                        ->update('hakim_adhoc_perikanan');

                    $response = [
                        'status' => 'success',
                        'message' => 'Data mutasi berhasil diupdate'
                    ];
                } else {
                    $response = [
                        'status' => 'error',
                        'message' => 'Gagal mengupdate data mutasi'
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

    // Delete mutasi
    public function hapus_mutasi($id)
    {
        try {
            // Delete from database
            $result = $this->mutasi_model->hapus_mutasi($id);

            if ($result) {
                $response = [
                    'status' => 'success',
                    'message' => 'Data mutasi berhasil dihapus'
                ];
            } else {
                $response = [
                    'status' => 'error',
                    'message' => 'Gagal menghapus data mutasi'
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
            $pengadilan_list = $this->mutasi_model->get_pengadilan_list();

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
            $hakim_list = $this->mutasi_model->get_hakim_list();

            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($hakim_list));

        } catch (Exception $e) {
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(['error' => $e->getMessage()]));
        }
    }

    // Get hakim by ID untuk ambil data pengadilan asal
    public function get_hakim_by_id($id)
    {
        try {
            $hakim = $this->mutasi_model->get_hakim_by_id($id);

            if ($hakim) {
                $response = [
                    'id' => $hakim->id,
                    'id_pengadilan' => $hakim->id_pengadilan,
                    'nama_pengadilan' => $hakim->nama_pengadilan
                ];
            } else {
                $response = ['error' => 'Data hakim tidak ditemukan'];
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


}