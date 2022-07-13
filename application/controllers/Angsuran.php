<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Angsuran extends CI_Controller {

	public function index()
	{
		$this->load->view('_partials/header');
		$this->load->view('angsuran');
		$this->load->view('_partials/footer');

	}

	public function input()
	{
		$this->load->view('_partials/header');
		$this->load->view('_partials/navbar');
		$this->load->view('input_angsuran');
		$this->load->view('_partials/footer');

	}

}

/* End of file Angsuran.php */
/* Location: ./application/controllers/Angsuran.php */