<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belajar extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->model('m_modal');//memanggil modal pada m_modal
	}

	function user(){
		$data['user'] = $this->m_modal->ambil_data()->result();//memanggil modal pada m_modal
		$this->load->view('view_user.php',$data); // menampilkan view pada view_user dan method data
	}

}