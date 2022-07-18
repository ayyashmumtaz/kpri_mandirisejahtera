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
		$id_keuangan =	$this->input->post('id_keuangan');
		$tgl_simpan =	$this->input->post('tgl_simpan');
		$tahun =	$this->input->post('tahun');
		$id_anggota =	$this->input->post('id_anggota');
		$sim_pokok =	$this->input->post('sim_pokok');
		$sim_wajib =	$this->input->post('sim_wajib');
		$thr =	$this->input->post('thr');
		$pendidikan =	$this->input->post('pendidikan');
		$rekreasi =	$this->input->post('rekreasi');
		$jumlah_angsuran =	$this->input->post('jumlah_angsuran');
		$jasa =	$this->input->post('jasa');

		$data = array(
			'id_keuangan' => $id_keuangan,
			'tgl_simpan' => $tgl_simpan,
			'tahun' => $tahun,
			'id_anggota' => $id_anggota,
			'sim_pokok' => $sim_pokok,
			'sim_wajib' => $sim_wajib,
			'thr' => $thr,
			'pendidikan' => $pendidikan,
			'rekreasi' => $rekreasi,
			'angsuran' => $jumlah_angsuran,
			'jasa' => $jasa
			

		);


		$this->Model_home->input_data($data, 'tabungan');
		$this->session->set_flashdata('order_berhasil', ' ');
		redirect('Simpanan/input');

	}

	public function data()
	{
	$data['anggota'] = $this->Model_home->getAnggota()->result();
	$this->load->view('_partials/header');
    $this->load->view('_partials/navbar');
    $this->load->view('data_simpanan', $data);
    $this->load->view('_partials/footer');
	}

	public function lihat($id)
	{
	$data['anggota'] = $this->Model_home->getbyIdAnggota($id);
	$data['user'] = $this->Model_home->getUserAnggota($id);
	$this->load->view('_partials/header');
    $this->load->view('_partials/navbar');
    $this->load->view('lihat_simpanan', $data);
    $this->load->view('_partials/footer');
	}

}

/* End of file Simpanan.php */
/* Location: ./application/controllers/Simpanan.php */