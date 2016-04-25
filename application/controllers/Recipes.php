<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Recipes extends CI_Controller{

	public $data;

    public function index(){
    	$this->data['recipes'] = $this->recipe_model->get_all();
    	$this->layout->render('recipes/catalog');
    }

    public function my_recipes() {
        if(!is_logged_in()) redirect('users/login');
        $id = $this->session->userdata('user_id');
    	$this->data['my_recipes'] = $this->recipe_model->get_recipes_by_user_id($id);
        $this->layout->render('recipes/my_recipes');
    }

    public function recipe_form() {
       if(!is_logged_in()) redirect('users/login');
       $this->load->helper('form');
	   $this->layout->render('recipes/recipe_form');
    }

    public function recipe_view($id) {
    	$this->data['recipe'] = $this->recipe_model->get_recipe($id);
        $this->data['comments'] = $this->comment_model->get_comments($id);
        $this->data['in_favourites'] = $this->favourites_model->exists_in_favourites($id);
        $this->data['in_user_recipes'] = $this->recipe_model->exists_in_user_recipes($id);


		$this->layout->render('recipes/recipe_view');
	}

    public function favourites() {
        $this->data['favourites'] = $this->favourites_model->get_all();
        $this->layout->render('recipes/favourites');
    }

    public function add_to_favourites($id) {
        $this->favourites_model->add_to_favourites($id);
        redirect("recipes/recipe_view/{$id}");
    }

    public function delete_from_favourites($id) {
        $this->favourites_model->delete_from_favourites($id);
        redirect("recipes/recipe_view/{$id}");
    }

    public function add_recipe() {
        if ( isset($_FILES['photo']['type']) == 'image/jpeg') {
            $this->load->helper('string');
            $new_name = random_string('unique') . '.' . pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
            move_uploaded_file($_FILES['photo']['tmp_name'], "assets/uploads/{$new_name}");
            $this->recipe_model->set_recipe($new_name);

            redirect('recipes/my_recipes');
        } else {
            $this->data['error'] = 'Wrong photo format';

            $this->recipe_form();
        }
    }

    public function edit_form($id) {
        if(!is_logged_in()) redirect('users/login');
        $this->data['recipe'] = $this->recipe_model->get_recipe($id);
        $this->layout->render("recipes/edit_form");
    }

    public function edit_recipe($id) {

        if(!$this->recipe_model->exists_in_user_recipes($id))
            redirect();

            var_dump($this->recipe_model->exists_in_user_recipes($id));
            if (!empty( $this->input->post( 'new_description' )) || 
                !empty( $this->input->post( 'new_directions' )) ||
                !empty( $this->input->post( 'new_title' )) || 
                !empty( $this->input->post( 'new_prep_time' )) || 
                !empty( $this->input->post( 'new_servings' )) || 
                !empty( $this->input->post( 'new_cals' )) || 
                !empty( $this->input->post( 'new_ingredients' )) 
            ) $this->recipe_model->edit_recipe($id);

            redirect("recipes/recipe_view/{$id}");
        

    }

}