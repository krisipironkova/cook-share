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

	public function exists_in_user_recipes($id) {

		$array = array('id' => $id, 'user_id' => $this->session->userdata('user_id'));
		$result = $this->db->where($array)->get($this->table);

		if($result->num_rows() == 1){
			return true;
		}

		return false;
	}

	public function get_recipe($id){

		$recipe = $this->db->where('id', $id)->get($this->table)->row();
		return $recipe;
	}

	public function get_recipes_by_user_id($id){

		$recipes = $this->db->where('user_id', $id)->order_by('id', 'desc')->get($this->table)->result();
		return $recipes;
	}

	public function edit_recipe($id){

		if (!empty($this->input->post('new_description')))
            $data['description'] = $this->input->post('new_description');
        if (!empty($this->input->post('new_directions')))
            $data['directions'] = $this->input->post('new_directions');
        if (!empty($this->input->post('new_title')))
            $data['title'] = $this->input->post('new_title');
        if (!empty($this->input->post('new_prep_time')))
            $data['prep_time'] = $this->input->post('new_prep_time');
        if (!empty($this->input->post('new_servings')))
            $data['servings'] = $this->input->post('new_servings');
        if (!empty($this->input->post('new_calss')))
            $data['cals'] = $this->input->post('new_cals');
        if (!empty($this->input->post('new_ingredients')))
            $data['ingredients'] = $this->input->post('new_ingredients');
        var_dump($data);

        $this->db->update($this->table, $data, ['id' => $id]);
	}
}