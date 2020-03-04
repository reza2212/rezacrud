<?php 

class M_login extends CI_Model{	
	function cek_login($table,$where){	// function cek login method table
		return $this->db->get_where($table,$where);//memanggil hasil dari methot table
	}	
}