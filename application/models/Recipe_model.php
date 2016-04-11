<?php

class Recipe_model extends CI_Model {
	private $table = 'recipe';
	private $columns = 'id, user_id, title, description, ingredients, directions, prep_time, servings, cals';

	public function set_recipe($info){

		$info['user_id'] = $this->session->userdata('user_id');
		unset($info['type']);
		unset($info['submitRecipe']);
		//var_dump($info);
		$this->db->insert($this->table, $info);
	}

	public function get_all(){
		return $this->db->select($this->columns)->order_by('id', 'desc')->get($this->table)->result();
	}

	public function exists_recipe($id){
		$result = $this->db->where('id', $id)->get($this->table);

		if($result->num_rows() == 1){
			return true;
		}
	}
}