<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class member extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Madmin');
    }

    public function index(){
        $data['member']=$this->Madmin->get_all_data('tbl_member')->result();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/member/tampil', $data);
        $this->load->view('admin/layout/footer');
    }

    public function delete($id){
        $this->Madmin->delete('tbl_member', 'id_member', $id);
        redirect('member');
    }
}