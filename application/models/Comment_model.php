<?php

class Comment_model extends CI_Model{

	private $table = 'comment';
	private $columns = 'id, user_id, recipe_id, data';

	public function set_comment($info){
		$info['user_id'] = $this->session->userdata('user_id');
		$this->db->insert($this->table, $info);
	}

	public function get_comments($recipe_id) {
		return $this->db->select('comment.data, users.username')->join('users', 'users.id = comment.user_id')->where('recipe_id', $recipe_id)->order_by('comment.id', 'desc')->get('comment')->result();
    }
}