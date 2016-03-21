<?php

class User_model extends CI_Model {
	private $table = 'users';
	private $columns = 'id, username, email, first_name, last_name';

	public function set_user($info){

		unset($info['passconf']);
		unset($info['submit']);
		$info['password'] = sha1($info['password']);

		$this->db->insert($this->table, $info);
	}

	public function get_user($id) {
		return $this->db->select($this->columns)->where('id', $id)->get($this->table)->result();
	}

	public function get_users() {
		return $this->db->select($this->columns)->get($this->table)->result();
	}

	public function update_user($id, $info) {

	}

	public function check_username($username){
		$db_username = $this->db->select('username')->where('username', $username)->get($this->table);
		if($db_username->num_rows() >= 1){
			return true;
		} else {
			return false;
		}
	}

	public function check_email($email){
		$db_email = $this->db->select('email')->where('email', $email)->get($this->table);
		if($db_email->num_rows() == 1){
			return true;
		} else {
			return false;
		}
	}
}