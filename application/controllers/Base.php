<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelList');
    }

    public function index() 
    {
        $data['lists'] = $this->ModelList->get();
        // print_r($data);
        $this->load->view('landing', $data);
    }

    public function insert() 
    {
        $list = $this->input->post('input-text');
        $this->ModelList->insert($list);
        redirect('base');
    }

    public function delete($id)
    {
        $this->ModelList->delete($id);
        redirect('base');
    }
}

?>