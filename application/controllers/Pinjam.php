<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');
class Pinjam extends CI_Controller{//membuat controller mahasiswa
	function __construct(){
		parent:: __construct();
		$this->load->model('Pinjam_model');
		 $this->load->library('session');//load file berkabel mahasiswa_model dari model
	}
	
	public function index(){
			$data['user'] = $this->Pinjam_model->getAll()->result();
			$this->template->views('crud/pinjam',$data);
	}

	public function input() {//membuat fucntion input untuk menginput data ke db
		//membuat beberapa variable untuk input
		$nama_peminjam = $this->input->post('nama_peminjam');
		$no_hp = $this->input->post('no_hp');
		$cable = $this->input->post('kabel');
		$durasi = $this->input->post('total');
		$tgl_pinjam = $this->input->post('tgl_pinjam');

		$data = array(//membuat array untuk menampung data yang telah diinput
			'nama_peminjam' => $nama_peminjam,
			'no_hp' => $no_hp,
			'kabel' => $cable,
			'total' => $durasi,
			'tgl_pinjam' => $tgl_pinjam
		);
		$this->Pinjam_model->input_data($data, 'pinjam');//mengakses User_model dan data yang ada pada table user
		redirect('Dashboard/index');//setelah data berhasil disimpan, maka kembalikan ke index
	}
}