<?php

class Recipe_model extends CI_Model {
	private $table = 'recipe';
	private $columns = 'id, user_id, title, description, ingredients, directions, prep_time, servings, cals, photo';

	public function set_recipe($img){
		$data = $this->input->post();
		$data['photo'] = $img;
		$data['user_id'] =  $this->session->userdata('user_id');
		$this->db->insert($this->table, $data);
	}

	public function get_all($limit = null){
		
		return $this->db->select($this->columns)->order_by('id', 'desc')->get($this->table, $limit)->result();
	}

	public function exists_recipe($id){

		$result = $this->db->where('id', $id)->get($this->table);

		if($result->num_rows() == 1){
			return true;
		}
	}

	public function get_recipe($id){

		$recipe = $this->db->where('id', $id)->get($this->table)->row();
		return $recipe;
	}

	public function get_recipes_by_user_id($id){

		$recipes = $this->db->where('user_id', $id)->order_by('id', 'desc')->get($this->table)->result();
		return $recipes;
	}
}