<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ngoding extends CI_Controller {
	
	function index(){
		$this->load->library('malasngoding'); // memanggil library pada malesngoding library 
		$this->malasngoding->nama_saya(); 
                echo "<br/>"; //menampilkan string
                $this->malasngoding->nama_kamu("Andi"); //memanggil string
	}

}