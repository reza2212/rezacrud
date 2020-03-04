<?php 

class m_modal extends CI_Model{
	function ambil_data(){
		return $this->db->get('user'); // memanggil data/hasil user controller
	}
}