function aksi_login(){
	$username = $this->input->post('username'); //input string
	$password = $this->input->post('password'); //input string
	$where = array(
		'username' => $username,
		'password' => md5($password)
		);
	$cek = $this->m_login->cek_login("admin",$where)->num_rows(); //validasi username and password
	if($cek > 0){

		$data_session = array( //mengaktifkan sesion
			'nama' => $username,
			'status' => "login"
			);

		$this->session->set_userdata($data_session); //mengaktifkan sesion pada user data method data_sesion

		redirect(base_url("admin")); //memanggil controller admin
	}else{
		echo "Username dan password salah !"; //menampilkan string
	}
}