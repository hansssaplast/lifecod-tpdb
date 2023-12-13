<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kategori extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Madmin');
    }

    public function index(){
        $data['kategori']=$this->Madmin->get_all_data('tbl_kategori')->result();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/kategori/tampil', $data);
        $this->load->view('admin/layout/footer');
    }

    public function add(){
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/kategori/formAdd');
        $this->load->view('admin/layout/footer');
    }

    public function save(){
        $nama_kategori = $this->input->post('nama_kategori');
        $dataInput = array('nama_kategori'=>$nama_kategori);
        $this->Madmin->insert('tbl_kategori', $dataInput);
        redirect('kategori');
    }

    public function get_by_id($id){
        $dataWhere = array('id_kategori' => $id);
        $data['kategori'] = $this->Madmin->get_by_id('tbl_kategori', $dataWhere)->row_object();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/kategori/formEdit', $data);
        $this->load->view('admin/layout/footer');
    }

    public function edit(){
        $id_kategori = $this->input->post('id_kategori');
        $nama_kategori = $this->input->post('nama_kategori');
        $dataUpdate = array('id_kategori'=>$id_kategori,
                            'nama_kategori'=>$nama_kategori);
        $this->Madmin->update('tbl_kategori', $dataUpdate, 'id_kategori', $id_kategori);
        redirect('kategori');
    }

    public function delete($id){
        $this->Madmin->delete('tbl_kategori', 'id_kategori', $id);
        redirect('kategori');
    }
}

