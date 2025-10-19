<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdhocPerikananModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_all_data()
    {
        $this->db->select('*');
        $this->db->from('hakim_adhoc_perikanan');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_data_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('hakim_adhoc_perikanan');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function insert_data($data)
    {
        return $this->db->insert('hakim_adhoc_perikanan', $data);
    }

    public function update_data($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('hakim_adhoc_perikanan', $data);
    }

    public function delete_data($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('hakim_adhoc_perikanan');
    }

    public function get_datatables()
    {
        $this->db->select('*');
        $this->db->from('hakim_adhoc_perikanan');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_join_data()
    {
        $this->db->select('h.*, p.nama_pengadilan, p.kelas, p.wilayah');
        $this->db->from('hakim_adhoc_perikanan h');
        $this->db->join('pengadilan_perikanan p', 'h.id_pengadilan = p.id', 'left');
        $query = $this->db->get();
        return $query->result();
    }
}
?>