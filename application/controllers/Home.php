<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('_partials/header');
		$this->load->view('_partials/navbar');
		$this->load->view('beranda.php');
		$this->load->view('_partials/footer');
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */