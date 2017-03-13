<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jabatan extends CI_Controller {

	public function index($idPegawai)
	{
	 $id = $idPegawai;
  	 $this->load->model('Pegawai_Model');
     $data['jabatan_array'] = $this->Pegawai_Model->getJabatanByPegawai($id);
     $data['pegawai'] = $this->Pegawai_Model->getNamaPegawai($id);
  	 $this->load->view('jabatan',$data,$id);
	}

}

/* End of file Jabatan.php */
/* Location: ./application/controllers/Jabatan.php */

 ?>