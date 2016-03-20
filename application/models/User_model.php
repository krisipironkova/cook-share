<?php

class User_model extends CI_Model {
	private $table = 'users';
	private $columns = 'id, username, email';

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
}