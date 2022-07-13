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
        $data['anggota'] = $this->Model_home->getDataAngsuran()->result();
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
}

?>