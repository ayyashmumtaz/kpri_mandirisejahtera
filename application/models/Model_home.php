<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_home extends CI_Model {

	public function getAnggota()
	{
	$this->db->select('*');
    $this->db->from('anggota');
    $this->db->join('sekolah', 'anggota.id_sekolah = sekolah.id');
    $query = $this->db->get();
    return $query;
}

public function getDataAngsuran()
	{
	$this->db->select('*');
    $this->db->from('riwayat_tabungan');
    $this->db->join('anggota', 'riwayat_tabungan.id_anggota = anggota.id_anggota');
    $query = $this->db->get();
    return $query;
}
public function getAllData($tgl)
	{
    $where = array('tgl_simpan' => $tgl);
	  $this->db->select('*');
    $this->db->from('anggota');
    $this->db->join('sekolah', 'anggota.id_sekolah = sekolah.id');
    $this->db->join('riwayat_tabungan', 'anggota.id_anggota = riwayat_tabungan.id_anggota');
    $this->db->where($where);
    $query = $this->db->get();
    return $query;
}

public function getDataInstansi($tgl, $tahun)
	{
    $where = array('tgl_simpan' => $tgl, 'tahun' => $tahun);
	  $this->db->select('id_sekolah,nama_sekolah,SUM(sim_pokok+sim_wajib+thr+pendidikan+rekreasi+angsuran+jasa) as total_tabungan');
    $this->db->from('sekolah');
    $this->db->join('riwayat_tabungan', 'sekolah.id = riwayat_tabungan.id_sekolah', 'left');
    $this->db->where($where);
    $this->db->group_by("id_sekolah");
    $query = $this->db->get();
    return $query;
}

public function getDataAngsuranInstansi()
	{
	$this->db->select('*');
    $this->db->from('angsuran');
    $query = $this->db->get();
    return $query;
}



public function getDataPembayaran()
	{
	$this->db->select('*');
    $this->db->from('pembayaran');
    $this->db->join('anggota', 'pembayaran.id_anggota = anggota.id_anggota');
    $query = $this->db->get();
    return $query;
}

  public function getbyIdAnggota($id)
  {
   $this->db->select('*');
    $this->db->from('anggota');
    $this->db->join('riwayat_tabungan', 'anggota.id_anggota = riwayat_tabungan.id_anggota');
    $this->db->join('sekolah', 'anggota.id_sekolah = sekolah.id');
    $this->db->where('anggota.id_anggota', $id);
    $query = $this->db->get();
    return $query->result();
}

function cari($id){
  $query= $this->db->get_where('anggota',array('id_anggota'=>$id));
  return $query;
}

public function jsonAnggota($id)
{
 $this->db->select('*');
  $this->db->from('anggota');
  $this->db->join('riwayat_tabungan', 'anggota.id_anggota = riwayat_tabungan.id_anggota');
  $this->db->join('tabungan', 'anggota.id_anggota = tabungan.id_anggota');
  $this->db->join('sekolah', 'anggota.id_sekolah = sekolah.id');
  $this->db->where('anggota.id_anggota', $id);
  $query = $this->db->get();
  return $query->result();
}

public function jsonAnggotaOnly($id)
{
 $this->db->select('*');
  $this->db->from('anggota');
  $this->db->join('sekolah', 'anggota.id_sekolah = sekolah.id');
  $this->db->where('anggota.id_anggota', $id);
  $query = $this->db->get();
  return $query->result();
}

public function getbyIdSekolah($id, $tgl, $tahun)
  {
    $where = array('tgl_simpan' => $tgl, 'id' => $id, 'tahun' => $tahun);
   $this->db->select('*, SUM(sim_pokok+sim_wajib+thr+pendidikan+rekreasi+angsuran+jasa) as total_tabungan');
    $this->db->from('sekolah');
    $this->db->join('anggota', 'sekolah.id = anggota.id_sekolah');
    $this->db->join('riwayat_tabungan', 'anggota.id_anggota = riwayat_tabungan.id_anggota');
    $this->db->group_by("anggota.id_anggota");
    $this->db->where($where);
    $query = $this->db->get();
    return $query->result();
}
public function getUserAnggota($id)
{
 $this->db->select('*');
  $this->db->from('anggota');
  $this->db->join('sekolah', 'anggota.id_sekolah = sekolah.id');
  $this->db->where('anggota.id_anggota', $id);
  $this->db->limit(1);
  $query = $this->db->get();
  return $query->result();
}

public function getUserSekolah($id)
{
 $this->db->select('*');
  $this->db->from('sekolah');
  $this->db->where('id', $id);
  $query = $this->db->get();
  return $query->result();
}

public function getPengurus()
	{
	$this->db->select('*');
    $this->db->from('pengurus');
    $query = $this->db->get();
    return $query;
}

public function getSekolah()
	{
	$this->db->select('*');
    $this->db->from('sekolah');
    $query = $this->db->get();
    return $query;
}

function getDataAnggota()
	{
   return $this->db->get('anggota')->result_array();
	}

	function getAllSekolah()
	{
   return $this->db->get('sekolah')->result_array();
	}

	public function totalAnggotaAktif()
{   
    $this->db->select('*');
  $this->db->from('anggota');
  $this->db->where('status', 1);
  $query = $this->db->get();

    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}

public function totalAnggotaTAktif()
{   
    $this->db->select('*');
  $this->db->from('anggota');
  $this->db->where('status', 0);
  $query = $this->db->get();

    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}

  function input_data($data,$table){
    $this->db->insert($table,$data);
  }

  function hapus_data($where,$table){
    $this->db->where($where);
    $this->db->delete($table);
  }

  public function getDataUser()
  {
    $name = $this->session->userdata('nik');
 	$this->db->select('*');
 	$this->db->where('nik', $name);
    $this->db->from('anggota');  
    $query = $this->db->get();
    return $query->result_array();

}

public function getDataSimpananUser()
{
  $name = $this->session->userdata('id_anggota');
  $tab = array('id_anggota' => $name);
  $this->db->select('*');
  $this->db->where($tab);
   $this->db->from('tabungan');  
   $query = $this->db->get();
   return $query->result_array();
}

public function getDataAngsuranUser()
{
  $name = $this->session->userdata('id_anggota');
  $this->db->select('*');
  $this->db->where('id_anggota', $name);
   $this->db->from('angsuran');  
   $query = $this->db->get();
   return $query->result_array();
}

function edit_data($where,$table){		
	return $this->db->get_where($table,$where);
}

function update_data($where,$data,$table){
  $this->db->where($where);
  $this->db->update($table,$data);
}	

}

/* End of file Model_home.php */
/* Location: ./application/models/Model_home.php */