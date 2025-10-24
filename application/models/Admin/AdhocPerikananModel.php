<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdhocPerikananModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // Ambil semua data hakim
    public function get_all_data()
    {
        $this->db->select('*');
        $this->db->from('hakim_adhoc_perikanan');
        $query = $this->db->get();
        return $query->result();
    }

    // Ambil data hakim by id (dengan join pengadilan)
    public function get_data_by_id($id)
    {
        $this->db->select('h.*, p.nama_pengadilan, p.kelas, p.wilayah');
        $this->db->from('hakim_adhoc_perikanan h');
        $this->db->join('pengadilan_perikanan p', 'h.id_pengadilan = p.id', 'left');
        $this->db->where('h.id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    // Insert data hakim baru
    public function insert_data($data)
    {
        return $this->db->insert('hakim_adhoc_perikanan', $data);
    }

    // Update data hakim
    public function update_data($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('hakim_adhoc_perikanan', $data);
    }

    // Delete data hakim
    public function delete_data($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('hakim_adhoc_perikanan');
    }

    // Ambil data datatables
    public function get_datatables()
    {
        $this->db->select('*');
        $this->db->from('hakim_adhoc_perikanan');
        $query = $this->db->get();
        return $query->result();
    }

    // Ambil data join pengadilan
    public function get_join_data()
    {
        $this->db->select('h.*, p.nama_pengadilan, p.kelas, p.wilayah');
        $this->db->from('hakim_adhoc_perikanan h');
        $this->db->join('pengadilan_perikanan p', 'h.id_pengadilan = p.id', 'left');
        $query = $this->db->get();
        return $query->result();
    }

    // Ambil riwayat mutasi hakim
    public function get_riwayat_mutasi($id_hakim)
    {
        $this->db->select('m.*, 
        pa.nama_pengadilan as pengadilan_asal,
        pt.nama_pengadilan as pengadilan_tujuan'
        );
        $this->db->from('mutasi_perikanan m');
        $this->db->join('pengadilan_perikanan pa', 'm.id_pengadilan_asal = pa.id', 'left');
        $this->db->join('pengadilan_perikanan pt', 'm.id_pengadilan_hasil_tpm = pt.id', 'left');
        $this->db->where('m.id_pegawai', $id_hakim);
        $this->db->order_by('m.tanggal_tpm', 'DESC');

        $query = $this->db->get();
        return $query->result();
    }
}
?>