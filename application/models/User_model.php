<?php
class User_model extends CI_Model{
	function getAll(){//function getAll
		$this->db->select('*');//select semua data
		$this->db->from('user');//dari table user
		$this->db->join('role', 'user.role = role.id_role');//gabungkan table grup dan user menggunakan id_grup
		$query = $this->db->get();
		return $query;//lakukan query db
	}

	function input_data($data, $table) {
		$this->db->insert($table,$data);
	}

	function edit_data($where,$table) {
		return $this->db->get_where($table, $where);
	}

	function update_data($where,$data,$table) {
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	function hapus_data($where, $table) {
		$this->db->where($where);
		$this->db->delete($table);
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
