<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Recipes extends CI_Controller{

	public $data;

    public function index(){
    	$this->data['recipes'] = $this->recipe_model->get_all();
    	$this->layout->render('recipes/catalog');
    }

    public function my_recipes(){
        if(!is_logged_in()) redirect('pages/home');
        $id = $this->session->userdata('user_id');
    	$this->data['my_recipes'] = $this->recipe_model->get_recipes_by_user_id($id);
        $this->layout->render('recipes/my_recipes');
    }

    public function recipe_form(){
           if(!is_logged_in()) redirect('pages/home');
    	$this->layout->render('recipes/recipe_form');
    }

    public function recipe_view($id){
    	$this->data['recipe'] = $this->recipe_model->get_recipe($id);
        $this->data['comments'] = $this->comment_model->get_comments($id);
		$this->layout->render('recipes/recipe_view');
	}

}