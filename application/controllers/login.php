<?php 

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login'); //memanggil model pada m_form modal

	}

	function index(){
		$this->load->view('v_login');//memanggil view pada v_login view
	}

	function aksi_login(){
		$username = $this->input->post('username'); //input string
		$password = $this->input->post('password');//input string
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->m_login->cek_login("admin",$where)->num_rows(); //memanggil modal pada m_login modal
		if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			redirect(base_url("admin/index")); //menentukan jalur yang digunakan untuk mengakses sebuah halaman web

		}else{
			echo "Username dan password salah !"; //memanggil strimng
		}
	}

	function logout(){
		$this->session->sess_destroy(); //mematikan sesion
		redirect(base_url('login'));//menentukan jalur yang digunakan untuk mengakses sebuah halaman web
	}
}