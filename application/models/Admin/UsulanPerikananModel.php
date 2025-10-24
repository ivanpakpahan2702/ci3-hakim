<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UsulanPerikananModel extends CI_Model
{
    private $table = 'usulan_perikanan';
    private $table_hakim = 'hakim_adhoc_perikanan';
    private $table_pengadilan = 'pengadilan_perikanan';

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // Dalam UsulanPerikananModel.php - PERBAIKAN
    public function get_all_usulan()
    {
        $this->db->select('u.*, h.nama as nama_pegawai, h.id_pengadilan as id_pengadilan_asal, 
                      p_asli.nama_pengadilan as pengadilan_sekarang, 
                      p_usulan.nama_pengadilan as pengadilan_usulan');
        $this->db->from($this->table . ' u');
        $this->db->join($this->table_hakim . ' h', 'h.id = u.id_pegawai', 'left');
        $this->db->join($this->table_pengadilan . ' p_asli', 'p_asli.id = h.id_pengadilan', 'left');
        $this->db->join($this->table_pengadilan . ' p_usulan', 'p_usulan.id = u.id_pengadilan_usulan', 'left');
        $this->db->order_by('u.tanggal_usulan', 'DESC');
        return $this->db->get()->result();
    }

    public function get_usulan_by_id($id)
    {
        $this->db->select('u.*, h.nama as nama_pegawai, h.foto as foto_pegawai, h.sumber_foto as sumber_foto, h.id_pengadilan as id_pengadilan_asal,
                      p_asli.nama_pengadilan as pengadilan_sekarang, 
                      p_usulan.nama_pengadilan as pengadilan_usulan');
        $this->db->from($this->table . ' u');
        $this->db->join($this->table_hakim . ' h', 'h.id = u.id_pegawai', 'left');
        $this->db->join($this->table_pengadilan . ' p_asli', 'p_asli.id = h.id_pengadilan', 'left');
        $this->db->join($this->table_pengadilan . ' p_usulan', 'p_usulan.id = u.id_pengadilan_usulan', 'left');
        $this->db->where('u.id', $id);
        return $this->db->get()->row();
    }

    public function tambah_usulan($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function update_usulan($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update($this->table, $data);
    }

    public function hapus_usulan($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete($this->table);
    }

    public function get_hakim_list()
    {
        $this->db->select('id, nama');
        $this->db->from($this->table_hakim);
        // $this->db->where('status', 'active');
        $this->db->order_by('nama', 'ASC');
        return $this->db->get()->result();
    }

    public function get_pengadilan_list()
    {
        $this->db->select('id, nama_pengadilan');
        $this->db->from($this->table_pengadilan);
        $this->db->order_by('nama_pengadilan', 'ASC');
        return $this->db->get()->result();

    }
}