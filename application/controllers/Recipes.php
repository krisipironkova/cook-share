<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Recipes extends CI_Controller
{

    public function index(){

    	$this->layout->render('recipes/catalog');
    }

    public function my_recipes(){
    	$this->layout->render('recipes/my_recipes');
    }

    public function recipe_form(){
    	$this->layout->render('recipes/recipe_form');
    }
}