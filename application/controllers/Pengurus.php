<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengurus extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_home');
	}

	public function index()
	{
		$data['anggota'] = $this->Model_home->getPengurus()->result();
		$this->load->view('_partials/header');
		$this->load->view('_partials/navbar');
		$this->load->view('pengurus.php', $data);
		$this->load->view('_partials/footer');
	}

}

/* End of file pengurus.php */
/* Location: ./application/controllers/pengurus.php */