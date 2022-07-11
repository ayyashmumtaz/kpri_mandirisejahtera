<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	function cek_login($data){		
		$query = $this->db->get_where('anggota', $data);
	return $query;
	}	
	
	public function getNamaUser()
  {
  	$name = $this->session->userdata('nik');
 	$this->db->select('*');
 	$this->db->where('nik', $name);
    $this->db->from('anggota');  
    $query = $this->db->get();
    return $query->result_array();

}

}

/* End of file Login_model.php */
/* Location: ./application/models/Login_model.php */