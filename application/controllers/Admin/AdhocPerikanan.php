<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 * @property \AdhocPerikananModel $adhoc_model
 */
class AdhocPerikanan extends CI_Controller
{
    /** @var \AdhocPerikananModel */
    public $adhoc_model; // ubah dari protected -> public

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/AdhocPerikananModel', 'adhoc_model');
    }

    public function index()
    {
        $data = ["title" => 'AdHoc Perikanan'];
        $this->load->view('admin/perikanan/index', $data);
    }

    public function get_data()
    {
        $data = $this->adhoc_model->get_join_data();
        if (json_last_error() !== JSON_ERROR_NONE) {
            echo json_last_error_msg();
        } else {
            echo json_encode($data);
        }
    }
}