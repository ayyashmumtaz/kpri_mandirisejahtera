<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sekolah extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_home');
	}

	public function index()
	{
		
	}

	public function tambah()
	{
	$this->load->view('_partials/header');
    $this->load->view('_partials/navbar');
    $this->load->view('input_sekolah');
    $this->load->view('_partials/footer');
	}

	public function simpan()
	{
		$id = $this->input->post('id');
		$alamat = $this->input->post('alamat');
		$nama_sekolah = $this->input->post('nama_sekolah');
		$status = 0;

		$data = array(
			'id' => $id,
			'nama_sekolah' => $nama_sekolah,
			'alamat'=> $alamat
		);

		$this->Model_home->input_data($data,'sekolah');
		$this->session->set_flashdata('order_berhasil', ' ');
		redirect('Anggota/tambah');
	}

}

/* End of file sekolah.php */
/* Location: ./application/controllers/sekolah.php */