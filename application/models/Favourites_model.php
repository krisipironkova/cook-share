<?php

class Favourites_model extends CI_Model{
	private $table = 'favourites';
	private $columns = 'id, user_id, recipe_id';

	public function exists_in_favourites($recipe_id) {
		$result = $this->db->where([
				'user_id' => $this->session->userdata('user_id'),
				'recipe_id' => $recipe_id
		])->get($this->table);

		if($result->num_rows() == 1) {
			return true;
		} else {
			return false;
		}
	}

	public function add_to_favourites($recipe_id) {
		$data = [
			'user_id' => $this->session->userdata('user_id'),
			'recipe_id' => $recipe_id
		];

		$this->db->insert($this->table, $data);
	}

	public function delete_from_favourites($recipe_id) {
		$data = [
			'user_id' => $this->session->userdata('user_id'),
			'recipe_id' => $recipe_id
		];

		$this->db->delete($this->table, $data);
	}

	public function get_all() {
		return $this->db->select('recipe.title, recipe.id')->join('recipe', 'recipe.id = favourites.recipe_id')->where('favourites.user_id', $this->session->userdata('user_id'))->order_by('recipe.id', 'desc')->get('favourites')->result();
	}

}