<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Recipes extends CI_Controller{

	public $data;

    public function index(){

    	$this->layout->render('recipes/catalog');
    }

    public function my_recipes(){

    	$this->data['recipes'] = $this->recipe_model->get_all();
    	$this->layout->render('recipes/my_recipes');
    }

    public function recipe_form(){
    	$this->layout->render('recipes/recipe_form');
    }

    public function recipe_view(){
		$this->layout->render('recipes/recipe_view');
	}
}