<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MutasiPerikananModel extends CI_Model
{
    private $table = 'mutasi_perikanan';
    private $table_hakim = 'hakim_adhoc_perikanan';
    private $table_pengadilan = 'pengadilan_perikanan';

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // Get all mutasi data with joins
    public function get_all_mutasi()
    {
        $this->db->select('m.*, h.nama as nama_pegawai, h.nip_nrp, h.jabatan, 
                          p_asal.nama_pengadilan as pengadilan_asal,
                          p_hasil.nama_pengadilan as pengadilan_hasil_tpm');
        $this->db->from($this->table . ' m');
        $this->db->join($this->table_hakim . ' h', 'h.id = m.id_pegawai', 'left');
        $this->db->join($this->table_pengadilan . ' p_asal', 'p_asal.id = m.id_pengadilan_asal', 'left');
        $this->db->join($this->table_pengadilan . ' p_hasil', 'p_hasil.id = m.id_pengadilan_hasil_tpm', 'left');
        $this->db->order_by('m.tanggal_tpm', 'DESC');
        return $this->db->get()->result();
    }

    // Get mutasi by ID
    public function get_mutasi_by_id($id)
    {
        $this->db->select('m.*, h.nama as nama_pegawai, 
                          p_asal.nama_pengadilan as pengadilan_asal,
                          p_hasil.nama_pengadilan as pengadilan_hasil_tpm');
        $this->db->from($this->table . ' m');
        $this->db->join($this->table_hakim . ' h', 'h.id = m.id_pegawai', 'left');
        $this->db->join($this->table_pengadilan . ' p_asal', 'p_asal.id = m.id_pengadilan_asal', 'left');
        $this->db->join($this->table_pengadilan . ' p_hasil', 'p_hasil.id = m.id_pengadilan_hasil_tpm', 'left');
        $this->db->where('m.id', $id);
        return $this->db->get()->row();
    }

    // Add new mutasi
    public function tambah_mutasi($data)
    {
        return $this->db->insert($this->table, $data);
    }

    // Update mutasi
    public function update_mutasi($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update($this->table, $data);
    }

    // Delete mutasi
    public function hapus_mutasi($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete($this->table);
    }

    // Get hakim list for dropdown
    public function get_hakim_list()
    {
        $this->db->select('id, nama');
        $this->db->from($this->table_hakim);
        $this->db->order_by('nama', 'ASC');
        return $this->db->get()->result();
    }

    // Get pengadilan list for dropdown
    public function get_pengadilan_list()
    {
        $this->db->select('id, nama_pengadilan');
        $this->db->from($this->table_pengadilan);
        $this->db->order_by('nama_pengadilan', 'ASC');
        return $this->db->get()->result();
    }

    // Method untuk mendapatkan data hakim by ID
    public function get_hakim_by_id($id)
    {
        $this->db->select('h.*, p.nama_pengadilan');
        $this->db->from($this->table_hakim . ' h');
        $this->db->join($this->table_pengadilan . ' p', 'p.id = h.id_pengadilan', 'left');
        $this->db->where('h.id', $id);
        return $this->db->get()->row();
    }
}