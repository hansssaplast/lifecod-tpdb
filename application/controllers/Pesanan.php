<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pesanan extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Madmin');
    }

    public function index(){
        // if(empty($this->session->userdata('userName'))){
        //     redirect('adminpanel');
        // }
        $data['kategori']=$this->Madmin->get_all_data('tbl_kategori')->result();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/pesanan/tampil', $data);
        $this->load->view('admin/layout/footer');
    }
}