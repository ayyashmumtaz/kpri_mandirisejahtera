<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{

    function __construct(){
        parent::__construct();
        $status = $this->session->userdata('role');
    if($status != "user"){
      redirect(site_url("Login"));
    }
        $this->load->model('Model_home');
    }

    public function index(){
        $data['anggota'] = $this->Model_home->getDataUser();
        $data['simpanan'] = $this->Model_home->getDataSimpananUser();
        $data['angsuran'] = $this->Model_home->getDataAngsuranUser();
        $this->load->view('user/_partials/head');
        $this->load->view('user/index', $data);
        $this->load->view('user/_partials/foot');

    }
}
?>