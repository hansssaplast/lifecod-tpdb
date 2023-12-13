<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Madmin');
    }

    public function index(){
        $data['admin']=$this->Madmin->get_all_data('tbl_admin')->result();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/admin/tampil', $data);
        $this->load->view('admin/layout/footer');
    }

    public function delete($id){
        $this->Madmin->delete('tbl_admin', 'id_admin', $id);
        redirect('admin');
    }
}