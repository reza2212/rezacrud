<?php 


class Crud extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data'); // memanggil model pada m_data model
		$this->load->helper('url'); //memanggil helper pada url helper

	}

	function index(){
		$data['user'] = $this->m_data->tampil_data()->result(); //memanggil modal pada m_data modal
		$this->load->view('v_user',$data);//memanggil view pada v_user view dan method data
	}

	function tambah(){
		$this->load->view('v_input');//memanggil view pada v_input view
	}

	function tambah_aksi(){
		$nama = $this->input->post('nama'); //input string
		$alamat = $this->input->post('alamat'); //input string
		$pekerjaan = $this->input->post('pekerjaan'); //input string

		$data = array(
			'nama' => $nama, //memanggil method nama
			'alamat' => $alamat, //memanggil method alamat
			'pekerjaan' => $pekerjaan //memanggil method pekerjaan
			);
		$this->m_data->input_data($data,'user'); //memanggil input m_data pada user modal dan method data
		redirect('crud/index'); //menambah route pada url crud/index
	}

	function hapus($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'user');//delete modal pada m_data modal dan user
		redirect('crud/index');  //menambah route pada url crud/index
	}

	function edit($id){
		$where = array('id' => $id); //memanggil data method id
		$data['user'] = $this->m_data->edit_data($where,'user')->result(); //memanggil modal pada m_data modal dan user
		$this->load->view('v_edit',$data); //memanggil view pada view edit dan method data
    }
    function update(){
        $id = $this->input->post('id'); //input string
        $nama = $this->input->post('nama'); //input string
        $alamat = $this->input->post('alamat'); //input string
        $pekerjaan = $this->input->post('pekerjaan'); //input string
    
        $data = array(
            'nama' => $nama, //memanggil string
            'alamat' => $alamat, //memanggil string
            'pekerjaan' => $pekerjaan //memanggil string
        );
    
        $where = array( //menampilkan data id
            'id' => $id
        );
    
        $this->m_data->update_data($where,$data,'user'); //mengupdate modal pada m_data modal
        redirect('crud/index');  //menambah route pada url crud/index
    }

}