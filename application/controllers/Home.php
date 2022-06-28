<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_home');
	}

	public function index()
	{
		$this->load->view('_partials/header');
		$this->load->view('_partials/navbar');
		$this->load->view('beranda.php');
		$this->load->view('_partials/footer');
	}

	public function anggota()
	{
		$data['anggota'] = $this->Model_home->getAnggota()->result();
		$this->load->view('_partials/header');
		$this->load->view('_partials/navbar');
		$this->load->view('anggota.php', $data);
		$this->load->view('_partials/footer');
	}

	public function pengurus()
	{
		$data['anggota'] = $this->Model_home->getPengurus()->result();
		$this->load->view('_partials/header');
		$this->load->view('_partials/navbar');
		$this->load->view('pengurus.php', $data);
		$this->load->view('_partials/footer');
	
	}

	public function sekolah()
	{
		$data['anggota'] = $this->Model_home->getAnggota()->result();
		$this->load->view('_partials/header');
		$this->load->view('_partials/navbar');
		$this->load->view('sekolah.php', $data);
		$this->load->view('_partials/footer');
	
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */