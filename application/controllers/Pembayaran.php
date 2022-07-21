<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_home');
    }

    public function index()
    {
        $data['anggota'] = $this->Model_home->getDataPembayaran()->result();
        $this->load->view('_partials/header');
        $this->load->view('_partials/navbar');
        $this->load->view('pembayaran', $data);
        $this->load->view('_partials/footer');

    }

    public function input()
    {
        $data['anggota'] = $this->Model_home->getAllSekolah();
        $this->load->view('_partials/header');
        $this->load->view('_partials/navbar');
        $this->load->view('input_pembayaran', $data);
        $this->load->view('_partials/footer');

    }

    public function proses_input()
    {
        $id_anggota = $this->input->post('id_anggota');
        $id_pembayaran = $this->input->post('id_pembayaran');
        $tgl_simpan = $this->input->post('tgl_simpan');

        $jumlah = $this->input->post('jumlah');
        $data = array(
            'id_pembayaran' => $id_pembayaran,
            'id_anggota' => $id_anggota,
            'tgl_simpan' => $tgl_simpan,
            'jumlah' => $jumlah
        );
        $this->Model_home->input_data($data, 'pembayaran');
        $this->session->set_flashdata('order_berhasil', ' ');
        redirect('Angsuran/input');
    }

    public function proses_input_sekolah()
    {
        $id_iuran = $this->input->post('id_iuran');
        $id_sekolah = $this->input->post('id_sekolah');
        $tgl_simpan = $this->input->post('tgl_simpan');
        $tahun = $this->input->post('tahun');
        $iurank3s = $this->input->post('iurank3s');
        $o2sn = $this->input->post('o2sn');
        $pramuka = $this->input->post('pramuka');
        $operasik3s = $this->input->post('operasik3s');
        $elok = $this->input->post('elok');

        $data = array(
            'id_iuran' => $id_iuran,
            'id_sekolah' => $id_sekolah,
            'tgl_simpan' => $tgl_simpan,
            'tahun' => $tahun,
            'iurank3s' => $iurank3s,
            'o2sn' => $o2sn,
            'pramuka' => $pramuka,
            'operasik3s' => $operasik3s,
            'elok' => $elok
        );
        $this->Model_home->input_data($data, 'tagihan_sekolah');
        $this->session->set_flashdata('order_berhasil', ' ');
        redirect('Pembayaran/input');
    }




    public function jsonGetSekolah()
    {
            $id = $this->input->get('id_sekolah');
            $cari = $this->Model_home->jsonSekolah($id);
            echo json_encode($cari);
      
    }
}

?>