<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anak extends CI_Controller {

	public function index($idPegawai)
	{
		$id=$idPegawai;
		$this->load->model('Pegawai_Model');
		$data['anak_array']=$this->Pegawai_Model->getAnakByPegawai($idPegawai);
		$data['pegawai'] = $this->Pegawai_Model->getNamaPegawai($id);
		$this->load->view('anak', $data, $id);
	
	}
}

/* End of file Anak.php */
/* Location: ./application/controllers/Anak.php */
 ?>