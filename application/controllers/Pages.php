<?php

defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

class Pages extends CI_Controller{

	public $data;

    public function home(){ 

    	$this->data['latest_recipes'] = $this->recipe_model->get_all(6);
        $this->layout->render('home'); 
    }  
}
