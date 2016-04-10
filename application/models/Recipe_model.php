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
}