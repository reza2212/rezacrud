<?php 

class Admin extends CI_Controller{

	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){ //mengaktifkan sesion
			redirect(base_url("login"));//memanggil controller login
		}
	}

	function index(){
		$this->load->view('v_admin');// memanggil view pada v_admin view
	}
}