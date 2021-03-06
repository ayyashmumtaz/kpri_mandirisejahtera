<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	$status = $this->session->userdata('role');
    if($status != "admin"){
      redirect(site_url("Login"));
    }
		$this->load->model('Model_home');
	}

	public function index()
	{
		$data['totalAnggota'] = $this->Model_home->totalAnggotaAktif();
		$data['totalAnggotaT'] = $this->Model_home->totalAnggotaTAktif();
		$this->load->view('_partials/header');
		$this->load->view('_partials/navbar');
		$this->load->view('beranda.php', $data);
		$this->load->view('_partials/footer');
	}


}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */