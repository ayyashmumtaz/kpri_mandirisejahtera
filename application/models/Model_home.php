<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_home extends CI_Model {

	public function getAnggota()
	{
	$this->db->select('*');
    $this->db->from('anggota');
    $query = $this->db->get();
    return $query;
}

}

/* End of file Model_home.php */
/* Location: ./application/models/Model_home.php */