<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Madmin');
    }

    public function index(){
        // if(empty($this->session->userdata('userName'))){
        //     redirect('adminpanel');
        // }
        $data['user']=$this->Madmin->get_all_data('tbl_user')->result();
        // $this->load->view('admin/layout/header');
        // $this->load->view('admin/layout/menu');
        // $this->load->view('admin/user/tampil', $data);
        // $this->load->view('admin/layout/footer');
        // $data['user'] = $this->Madmin->get_by_id('tbl_user', array('id_user' => $this->session->userdata('id_user')))->row();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/user/tampil', $data);
        $this->load->view('admin/layout/footer');
    }

    public function save(){
        $id = $this->session->userdata('id_user');
        $password = $this->input->post('password');
        $username = $this->input->post('username');
        $nama_user = $this->input->post('nama_user');
        $alamat_user = $this->input->post('alamat_user');
        $kodepos = $this->input->post('kodepos');
        $tlp_user = $this->input->post('tlp_user');
        if($password != ""){
            $dataUpdate = array(
                'username' => $username, 
                'password' => $password, 
                'nama_user' => $nama_user,
                'alamat_user' => $alamat_user, 
                'kodepos' => $kodepos, 
                'tlp_user' => $tlp_user,
            );
            $this->Madmin->update('tbl_user', $dataUpdate, 'id_user', $id);
        }else{
            $dataUpdate = array(
                'username' => $username,  
                'nama_user' => $nama_user,
                'alamat_user' => $alamat_user, 
                'kodepos' => $kodepos, 
                'tlp_user' => $tlp_user, 
            );
            $this->Madmin->update('tbl_user', $dataUpdate, 'id_user', $id);
        }
        
        redirect('user');
    }

    // public function get_by_id($id){
    //     $dataWhere = array('id_user'=>$id);
    //     $data['user']=$this->Madmin->get_by_id('tbl_user', $dataWhere)->row_object();
    //     $this->load->view('admin/layout/header');
    //     $this->load->view('admin/layout/menu');
    //     $this->load->view('admin/user/editProfileUser', $data);
    //     $this->load->view('admin/layout/footer');
    // }

    // public function edit(){
    //     $id = $this->session->userdata('id_user');
    //     $nama_user = $this->input->post('nama_user');
    //     $alamat_user = $this->input->post('alamat_user');
    //     $kodepos = $this->input->post('kodepos');
    //     $tlp_user = $this->input->post('tlp_user');
    //     $dataUpdate = array(
    //         'nama_user' => $nama_user, 
    //         'alamat_user' => $alamat_user,
    //         'kodepos' => $kodepos,  
    //         'tlp_user' => $tlp_user 
    //     );
    //     $this->Madmin->update('tbl_user', $dataUpdate, 'id_user', $id);
    //     redirect('user');
    // }

    // public function save(){
    //     $id = $this->session->userdata('id_user');
    //     $nama_user = $this->input->post('nama_user');
    //     $alamat_user = $this->input->post('alamat_user');
    //     $kodepos = $this->input->post('kodepos');
    //     $tlp_user = $this->input->post('tlp_user');
    //     if($password != ""){
    //         $dataUpdate = array(
    //             'username' => $username, 
    //             'password' => $password, 
    //             'namaKonsumen' => $namaKonsumen,
    //             'alamat' => $alamat, 
    //             'email' => $email, 
    //             'tlpn' => $telepon, 
    //         );
    //         $this->Madmin->update('tbl_user', $dataUpdate, 'id_user', $id);
    //     }else{
    //         $dataUpdate = array(
    //             'username' => $username, 
    //             'namaKonsumen' => $namaKonsumen,
    //             'alamat' => $alamat, 
    //             'email' => $email, 
    //             'tlpn' => $telepon, 
    //         );
    //         $this->Madmin->update('tbl_user', $dataUpdate, 'id_user', $id);
    //     }
        
    //     redirect('user');
    // }

}