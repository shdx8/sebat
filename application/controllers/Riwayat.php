<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');
class Riwayat extends CI_Controller{//membuat controller mahasiswa
	function __construct(){
		parent:: __construct();
      $this->load->model('Pinjam_model');
      $this->load->helper('url');
      $this->load->library('session');//load file bernama mahasiswa_model dari model
	}
	
	public function index(){
			$data['pinjam'] = $this->Pinjam_model->getAll()->result();
			$this->template->views('crud/history',$data);
	}
}
