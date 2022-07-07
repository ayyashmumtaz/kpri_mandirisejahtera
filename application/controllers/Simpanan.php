<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simpanan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_home');
	}

	public function index()
	{
		
	}

	public function input()
	{
	$data['anggota'] = $this->Model_home->getDataAnggota();
	$this->load->view('_partials/header');
    $this->load->view('_partials/navbar');
    $this->load->view('input_simpanan', $data);
    $this->load->view('_partials/footer');
	}

	public function tambah_tabungan()
	{
		// code...
	}

	public function data()
	{
	$data['anggota'] = $this->Model_home->getAnggota()->result();
	$this->load->view('_partials/header');
    $this->load->view('_partials/navbar');
    $this->load->view('data_simpanan', $data);
    $this->load->view('_partials/footer');
	}

	public function viewAnggota($id)
	{
		// code...
	}

}

/* End of file Simpanan.php */
/* Location: ./application/controllers/Simpanan.php */