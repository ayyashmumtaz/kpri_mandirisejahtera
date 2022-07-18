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
		$id_angsuran = uniqid();
		$id_anggota =	$this->input->post('id_anggota');
		$jumlah_angsuran =	$this->input->post('jumlah_angsuran');
		$bulan =  	$this->input->post('bulan');
		$jasa =	$this->input->post('jasa');

		$data = array(
			'id_angsuran' => $id_angsuran,
			'id_anggota' => $id_anggota,
			'tgl_simpan' => $bulan,
			'angsuran' => $jumlah_angsuran,
			'jasa' => $jasa
		);


		$this->Model_home->input_data($data, 'angsuran');
		$this->session->set_flashdata('order_berhasil', ' ');
		redirect('Angsuran/input');
	}

	public function data()
	{
	$data['anggota'] = $this->Model_home->getAnggota()->result();
	$this->load->view('_partials/header');
    $this->load->view('_partials/navbar');
    $this->load->view('data_angsuran', $data);
    $this->load->view('_partials/footer');
	}

	public function lihat($id)
	{
	$data['anggota'] = $this->Model_home->getbyIdAnggota($id);
	$data['user'] = $this->Model_home->getUserAnggota($id);
	$this->load->view('_partials/header');
    $this->load->view('_partials/navbar');
    $this->load->view('lihat_angsuran', $data);
    $this->load->view('_partials/footer');
	}

}

/* End of file Angsuran.php */
/* Location: ./application/controllers/Angsuran.php */