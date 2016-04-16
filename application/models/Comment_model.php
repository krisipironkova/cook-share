<?php

class Comment_model extends CI_Model{

	private $table = 'comment';
	private $columns = 'id, user_id, recipe_id, data';

	public function set_comment($info){
		var_dump($info);
		$info['user_id'] = $this->session->userdata('user_id');
		unset($info['type']);
		// unset($info['submitComment']);
		$this->db->insert($this->table, $info);
	}

}