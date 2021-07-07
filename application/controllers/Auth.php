<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('User_model');
     $this->load->library('session');
	}

	public function index() {
		$this->load->view('login');
	}

	public function cek_log() {
		$username = $this->input->post('txt_user');
		$password = $this->input->post('txt_pass');
		$cek = $this->User_model->login($username, $password,'user')->result();
		if($cek != FALSE) {
			foreach ($cek as $row) {
				$user = $row->username;
				$role = $row->role;
			}
			$this->session->set_userdata('session_user', $user);
			$this->session->set_userdata('session_role', $role);
			redirect('Dashboard');
		} else {
			$this->load->view('login');
		}
	}
  
	public function logout(){
		$this->session->sess_destroy();
		redirect('Auth');
	}

	public function LoginAPI() {
		$username = $this->input->post('txt_user');
		$password = $this->input->post('txt_pass');
		$result = $this->User_model->login($username, $password,'user')->result();
		echo json_encode($result);
	
	}
}
?>