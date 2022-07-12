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
		// code...
	}

}

/* End of file Angsuran.php */
/* Location: ./application/controllers/Angsuran.php */