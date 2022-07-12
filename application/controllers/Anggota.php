<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_home');
	}

	public function index()
	{
		$data['anggota'] = $this->Model_home->getAnggota()->result();
		$this->load->view('_partials/header');
		$this->load->view('_partials/navbar');
		$this->load->view('anggota.php', $data);
		$this->load->view('_partials/footer');
	}

	public function tambah()
	{
	$data['sekolah'] = $this->Model_home->getAllSekolah();
	$this->load->view('_partials/header');
    $this->load->view('_partials/navbar');
    $this->load->view('input_anggota', $data);
    $this->load->view('_partials/footer');
	}

	public function simpan()
	{
		$id = $this->input->post('id_anggota');
		$nama = $this->input->post('nama_anggota');
		$nik = $this->input->post('nik');
		$password = $this->input->post('password');
		$id_sekolah = $this->input->post('id_sekolah');
		$tgl_daftar = $this->input->post('tgl_daftar');
		$role = $this->input->post('role');
		$status = 0;

		$data = array(
			'id_anggota' => $id,
			'nama_anggota' => $nama,
			'nik' => $nik,
			'password' => $password,
			'id_sekolah' => $id_sekolah,
			'tgl_daftar' => $tgl_daftar,
			'role' => $role,
			'status' => $status
		);

		$this->Model_home->input_data($data,'anggota');
		$this->session->set_flashdata('order_berhasil', ' ');
		redirect('Anggota/tambah');
	}

	function edit($id){
		$where = array('id_anggota' => $id);
		$data['sekolah'] = $this->Model_home->getAllSekolah();
		$data['user'] = $this->Model_home->edit_data($where,'anggota')->result();
		$this->load->view('_partials/header');
		$this->load->view('_partials/navbar');
		$this->load->view('edit_anggota', $data);
		$this->load->view('_partials/footer');
	}

	public function update()
	{
		$id = $this->input->post('id_anggota');
		$nama = $this->input->post('nama_anggota');
		$nik = $this->input->post('nik');
		$password = $this->input->post('password');
		$id_sekolah = $this->input->post('id_sekolah');
		$tgl_daftar = $this->input->post('tgl_daftar');
		$role = $this->input->post('role');
		$status = 0;

		$data = array(
			'id_anggota' => $id,
			'nama_anggota' => $nama,
			'nik' => $nik,
			'password' => $password,
			'id_sekolah' => $id_sekolah,
			'tgl_daftar' => $tgl_daftar,
			'role' => $role,
			'status' => $status
		);

		$where = array(
			'id_anggota' => $id
		);

		$this->Model_home->update_data($where,$data,'anggota');
		$this->session->set_flashdata('order_berhasil', ' ');
		redirect('Anggota');
	}

	function hapus($id){
		$where = array('id_anggota' => $id);
		$this->Model_home->hapus_data($where,'anggota');
		$this->session->set_flashdata('hapusBerhasil', ' ');
		redirect('Anggota');
	}

}

/* End of file Anggota.php */
/* Location: ./application/controllers/Anggota.php */