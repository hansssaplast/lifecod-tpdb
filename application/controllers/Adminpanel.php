<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminpanel extends CI_Controller{
	public function __construct() {
        parent::__construct();
        $this->load->model('Madmin');
    }

	public function index(){
		$this->load->view('admin/login');
	}

	public function dashboard(){
		if (empty($this->session->userdata('username'))){
            redirect('adminpanel');
        }
		$this->load->view('admin/layout/header');
		$this->load->view('admin//layout/menu');
		$this->load->view('admin/dashboard');
		$this->load->view('admin/layout/footer');
	}

	public function login(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'Username', 'required', array('required' => 'Field %s must be filled.'));
		$this->form_validation->set_rules('password', 'Password', 'required', array('required' => 'Field %s must be filled.'));
	
	
		if ($this->form_validation->run() == false) {
			$this->load->view('admin/login');
		} else {
			$u = $this->input->post('username');
			$p = $this->input->post('password');
	
			$cek = $this->Madmin->cek_login($u, $p);
	
			if ($cek==1) {
				$data_session = array(
					'username' => $u,
					'status' => 'login'
				);
				$this->session->set_userdata($data_session);
				redirect('adminpanel/dashboard');
			} else {
				$this->session->set_flashdata('error', 'Username or password is incorrect.');
				redirect('adminpanel');
			}
		}
		}

	public function logout(){
		$this->session->sess_destroy();
		redirect('adminpanel');
	}
}
?>