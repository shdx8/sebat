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

	public function status($id_pinjam) {

		$data = array(
			'status' => 'selesai',
		);
		
		$where = array(
			'id_pinjam' => $id_pinjam
		);

		$this->Pinjam_model->update_status($where,$data, 'pinjam');
		redirect('Riwayat');
	}

public function remove($id_pinjam){
		$where=array('id_pinjam'=>$id_pinjam);
		$this->Pinjam_model->hapus_data($where, 'pinjam');
		redirect('Riwayat');
	}


public function ApiUpdate() {
$id_pinjam = $this->input->get('id_pinjam');
$status = $this->input->get('status');
		$data = array(
			$status => 'selesai',
		);
		
		$where = array(
			'id_pinjam' => $id_pinjam
		);

		$this->Pinjam_model->update_status($where,$data, 'pinjam');
		
	}


public function ApiDelete(){
		$id_pinjam = $this->input->get('id_pinjam');
		$where = array('id_pinjam'=>$id_pinjam);
		if($this->Pinjam_model->hapus_data($where, 'pinjam')>0){
			$response=[
				'success'=>true,
				'message'=>'data berhasil dihapus'
			];
		}else{
			$response=[
				'success'=>false,
				'message'=>'data gagal dihapus'
			];
			}
			echo json_encode($response);
		}	
}