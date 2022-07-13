<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();	
		 
		$this->load->model('Login_model');
	}

	function index(){
		$status = $this->session->userdata('role');
    if($status == "admin"){
      redirect(site_url("Home"));
    }
		$status = $this->session->userdata('role');
		$this->load->view('_partials/header');
		$this->load->view('login');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$data = array(
			'nik' => $username,
			'password' => $password
			);
	$hasil = $this->Login_model->cek_login($data);
	if ($hasil->num_rows() == 1) {

		foreach ($hasil->result() as $sess) {
		$sess_data['logged_in'] = 'Sudah Login';
		$sess_data['nama_anggota'] = $sess->nama_anggota;
		$sess_data['nik'] = $sess->nik;
		$sess_data['id_anggota'] = $sess->id_anggota;
		$sess_data['role'] = $sess->role;
		$this->session->set_userdata($sess_data);
		}
	$status = $this->session->userdata('role');
		if ($status == "admin") 
		 {
			$this->session->set_flashdata('login_berhasil', ' ');
			redirect(site_url("Home"));
		}elseif ($status == "user") {
			$this->session->set_flashdata('login_berhasil', ' ');
			redirect(site_url("User"));
		}
	}else{
			$this->session->set_flashdata('gagal', ' ');
			redirect(site_url("Login"));
		}
}
	

	function logout(){
		$this->session->sess_destroy();
		redirect(site_url('Login'));
	}
}



/* End of file Login.php */
/* Location: ./application/controllers/Login.php */