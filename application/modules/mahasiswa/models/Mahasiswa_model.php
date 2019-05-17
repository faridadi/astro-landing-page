<?php

class Mahasiswa_model extends MY_Model
{
	function __construct()
    {
        parent::__construct();
        $this->load->database();
	}
	  
	public function getMahasiswa(){
		return $this->db->get('mahasiswa')->result_array() ;
	}
}
?>
