<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');
class Dashboard extends CI_Controller{//membuat controller mahasiswa
	function __construct(){
		parent:: __construct();
		$this->load->model('User_model');
		 $this->load->library('session');//load file bernama User_model dari model
	}
	
	public function index(){
			$data['user'] = $this->User_model->getAll()->result();
			$this->template->views('dashboard/home',$data);
	}

	public function tambah() {//membuat function tambah
		$this->template->views('crud/tambah_mahasiswa');
	}

	
}
?>