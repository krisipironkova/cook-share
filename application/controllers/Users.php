<?php

class Users extends CI_Controller{

	public function login(){
		$this->layout->render('users/login');
	}

	public function register(){
		if(is_logged_in()) redirect('pages/home');
		$this->layout->render('users/register');
	}

	public function logout(){
		$this->session->sess_destroy();

		redirect();
	}
}

?>