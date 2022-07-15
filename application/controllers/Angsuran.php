<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Angsuran extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_home');
	}

	public function index()
	{
		$data['anggota'] = $this->Model_home->getDataAngsuran()->result();
		$this->load->view('_partials/header');
		$this->load->view('_partials/navbar');
		$this->load->view('angsuran', $data);
		$this->load->view('_partials/footer');

	}

	public function input()
	{
		$data['anggota'] = $this->Model_home->getDataAnggota();
		$this->load->view('_partials/header');
		$this->load->view('_partials/navbar');
		$this->load->view('input_angsuran', $data);
		$this->load->view('_partials/footer');

	}

	public function tambah_angsuran()
	{
		$id_anggota =	$this->input->post('id_anggota');
		$jumlah_angsuran =	$this->input->post('jumlah_angsuran');
		$jasa =	$this->input->post('jasa');

		$data = array(
			'jumlah_angsuran' => $jumlah_angsuran,
			'jasa' => $jasa
		);

		$where = array(
			'id_anggota' => $id_anggota
		);

		$this->Model_home->update_data($where,$data, 'tabungan');
		$this->session->set_flashdata('order_berhasil', ' ');
		redirect('Angsuran/input');
	}

}

/* End of file Angsuran.php */
/* Location: ./application/controllers/Angsuran.php */