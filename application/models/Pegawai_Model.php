<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai_Model extends CI_Model {

		public function __construct()
		{
			parent::__construct();
			//Do your magic here
		}	

		public function getDataPegawai()
		{
			$query = $this->db->get('pegawai');
			return $query->result_array();
		}

		public function getNamaPegawai($idPegawai)
		  {
		   $id = $idPegawai;
		      $this->db->where('id', $id);
		   $query = $this->db->get('pegawai');
		   return $query->result_array();
		  }

		  public function getJabatanByPegawai($idPegawai)
		  {
		   $id = $idPegawai;
		   $this->db->where('fk_pegawai', $id);
		   $query = $this->db->get('jabatan_pegawai');
		   return $query->result_array();
		  }
		public function getAnakByPegawai($idPegawai)
		{
			$id = $idPegawai;	
			$this->db->where('fk_pegawai', $id);		
			$query = $this->db->get('anak');
			return $query->result_array();
			
		}

}

/* End of file Pegawai_Model.php */
/* Location: ./application/models/Pegawai_Model.php */
 ?>