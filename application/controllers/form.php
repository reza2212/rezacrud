<?php 

class Form extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->library('form_validation'); //memanggil library pada v_form library
	}

	function index(){
		$this->load->view('v_form'); //memanggil view pada v_form view
	}

	function aksi(){
		$this->form_validation->set_rules('nama','Nama','required'); //mamanggil input string 
		$this->form_validation->set_rules('email','Email','required'); //mamanggil input string
		$this->form_validation->set_rules('konfir_email','Konfirmasi Email','required'); //mamanggil input string

		if($this->form_validation->run() != false){ //validasi data
			echo "Form validation oke"; //menampilkan string
		}else{
			$this->load->view('v_form'); //memanggil view pada v_form view
		}
	}
}