<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdhocPerikananModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function get_all_data()
    {
        $this->db->select('*');
        $this->db->from('adhoc_perikanan');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_data_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('adhoc_perikanan');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function insert_data($data)
    {
        return $this->db->insert('adhoc_perikanan', $data);
    }

    public function update_data($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('adhoc_perikanan', $data);
    }

    public function delete_data($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('adhoc_perikanan');
    }

    public function get_datatables()
    {
        $this->db->select('*');
        $this->db->from('adhoc_perikanan');
        // Add any necessary filtering, ordering, or pagination logic here
        $query = $this->db->get();
        return $query->result();
    }
}
?>