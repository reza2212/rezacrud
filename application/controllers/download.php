<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Download extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url','download'));	//memanggil helper pada url dan download helper			
	}

	public function index(){		
		$this->load->view('v_download'); //memanggil view pada v_download view
	}

	public function lakukan_download(){				
		force_download('gambar/HCI.docx',NULL);//derectory tempat file yang mau dilink
	}	

}