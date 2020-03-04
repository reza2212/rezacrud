<?php 

class M_data extends CI_Model{
	function tampil_data(){
		return $this->db->get('user');//memanggil hasil/isi data user
	}

	function input_data($data,$table){
		$this->db->insert($table,$data); //function input data 
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);//function hapus data
	}

	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);//function edit data
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);//function update data setelah diubah
	}	
}