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
		$data['anggota'] = $this->Model_home->getSekolah()->result();
		$this->load->view('_partials/header');
		$this->load->view('_partials/navbar');
		$this->load->view('sekolah.php', $data);
		$this->load->view('_partials/footer');
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
		redirect('Sekolah/tambah');
	}

	function edit($id){
		$where = array('id' => $id);
		$data['user'] = $this->Model_home->edit_data($where,'sekolah')->result();
		$this->load->view('_partials/header');
		$this->load->view('_partials/navbar');
		$this->load->view('edit_sekolah', $data);
		$this->load->view('_partials/footer');
	}

	function hapus($id){
		$where = array('id' => $id);
		$this->Model_home->hapus_data($where,'sekolah');
		$this->session->set_flashdata('hapusBerhasil', ' ');
		redirect('Sekolah');
	}

	public function update()
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

		$where = array(
			'id' => $id
		);

		$this->Model_home->update_data($where,$data,'sekolah');
		$this->session->set_flashdata('order_berhasil', ' ');
		redirect('Sekolah');
	}

	public function nonaktif($id)
	{
		$status = 0;

		$data = array(
			'status' => $status
		);

		$where = array(
			'id' => $id
		);

		$this->Model_home->update_data($where,$data,'sekolah');
		$this->session->set_flashdata('order_berhasil', ' ');
		redirect('Sekolah');
	}

	public function aktifkan($id)
	{
		$status = 1;

		$data = array(
			'status' => $status
		);

		$where = array(
			'id' => $id
		);

		$this->Model_home->update_data($where,$data,'sekolah');
		$this->session->set_flashdata('order_berhasil', ' ');
		redirect('Sekolah');
	}

}

/* End of file sekolah.php */
/* Location: ./application/controllers/sekolah.php */