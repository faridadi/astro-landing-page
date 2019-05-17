<?php	
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends MX_Controller
{
	public function __cunstruct(){
		parrent::__cunstruct();
		$this->load->model('Mahasiswa_model');		
	}

	public function index(){
		$mahasiswa = $this->Mahasiswa_model->getMahasiswa();
		var_dump($this);
	}
}

?>
