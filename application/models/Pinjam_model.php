<?php
class Pinjam_model extends CI_Model{

	// Function untuk membuat ID secara otomatis dari ID terakhir
	function auto_id(){
		$query = $this->db->query("SELECT max(id_pinjam) as id_new FROM pinjam");
		$data =$query->row_array();
		$id_pinjam = $data['id_new'];

		// mengambil angka dari kode barang terbesar, menggunakan fungsi substr
		// dan diubah ke integer dengan (int)
		$urutan = (int) substr($id_pinjam, 3, 3);

		// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
		$urutan++;

		// membentuk kode barang baru
		// perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
		// misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
		// angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya BRG 
		$huruf = "S-";
		$id_pinjam = $huruf . sprintf("%03s", $urutan);
		return $id_pinjam;
	}
	function getAll(){//function getAll
		$this->db->select('*');//select semua data
		$this->db->from('pinjam');//dari table user
		$query = $this->db->get();
		return $query;//lakukan query db
	}

	function input_data($data, $table) {
		$this->db->insert($table,$data);
	}

	function edit_data($where,$table) {
		return $this->db->get_where($table, $where);
	}

	function update_status($where,$data,$table) {
		$this->db->where($where);
		$this->db->update($table, $data);
		
	}

	function hapus_data($where, $table) {
		$this->db->where($where);
		$this->db->delete($table);
	}

function hapusAPI($where, $table) {
		$this->db->where($where);
		$this->db->delete($table);
		return $this->db->affected_rows(); 
	}

	function login($user,$pass,$table){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('username',$user);
		$this->db->where('password',$pass);
		$query = $this->db->get();
		return $query;
	}



	
}
?>