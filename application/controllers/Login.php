<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('login_model');
	}
	
	public function index(){
		$this->load->view('halaman_login');
	}

	function auth(){
		$email = $this->input->post('email',TRUE);
		$password = md5($this->input->post('password',TRUE));
		$validate = $this->login_model->validate($email,$password);
		if ($validate->num_rows() > 0){
			$data = $validate->row_array();
			$name = $data['nama_karyawan'];
			$email = $data['email'];
			$role = $data['role'];
			$sesdata = array(
				'username' => $name,
				'email' => $email,
				'role' => $role,
				'logged_in' => TRUE
			);
			$this->session->set_userdata($sesdata);

			if($role === '1'){
				redirect('admin');
			}else{
				redirect('pegawai');
			}
		}else{
			echo $this->session->set_flashdata('msg','Username atau Password yang Anda Masukkan Salah!');
			redirect();
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect();
	}

}
