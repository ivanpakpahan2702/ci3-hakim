<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PengadilanPerikananModel extends CI_Model
{
    private $table = 'pengadilan_perikanan';
    private $table_hakim = 'hakim_adhoc_perikanan';

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // Ambil semua data pengadilan
    public function get_all_data()
    {
        return $this->db->get($this->table)->result();
    }

    // Ambil data pengadilan by id
    public function get_data_by_id($id)
    {
        return $this->db->get_where($this->table, ['id' => $id])->row();
    }

    // Ambil data hakim adhoc by id_pengadilan
    public function get_hakim_by_pengadilan($id_pengadilan)
    {
        return $this->db->get_where($this->table_hakim, ['id_pengadilan' => $id_pengadilan])->result();
    }

    // Insert data pengadilan baru
    public function insert_data($data)
    {
        return $this->db->insert($this->table, $data);
    }

    // Update data pengadilan
    public function update_data($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update($this->table, $data);
    }

    // Delete data pengadilan
    public function delete_data($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete($this->table);
    }

    // Ambil data untuk DataTables
    public function get_datatables()
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->order_by('id', 'ASC');
        return $this->db->get()->result();
    }

    // Hitung total data
    public function count_all()
    {
        return $this->db->count_all($this->table);
    }

    // Hitung data filtered
    public function count_filtered()
    {
        return $this->db->get($this->table)->num_rows();
    }
}