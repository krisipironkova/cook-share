<?php

class Users extends CI_Controller{

	public function login(){
		$this->layout->render('users/login');
	}

	public function register(){
		$this->layout->render('users/register');
	}
}

?>