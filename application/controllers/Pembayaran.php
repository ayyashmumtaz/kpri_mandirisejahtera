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
        $data['anggota'] = $this->Model_home->getDataAnggota();
        $this->load->view('_partials/header');
        $this->load->view('_partials/navbar');
        $this->load->view('input_pembayaran', $data);
        $this->load->view('_partials/footer');

    }

    public function proses_input()
    {
        $id_anggota = $this->input->post('id_anggota');
        $id_pembayaran = $this->input->post('id_pembayaran');
        $tgl_bayar = $this->input->post('tgl_bayar');
        $jumlah = $this->input->post('jumlah');
        $data = array(
            'id_pembayaran' => $id_pembayaran,
            'id_anggota' => $id_anggota,
            'tgl_bayar' => $tgl_bayar,
            'jumlah' => $jumlah
        );
        $this->Model_home->input_data($data, 'pembayaran');
        $this->session->set_flashdata('order_berhasil', ' ');
        redirect('Pembayaran');
    }
}

?>