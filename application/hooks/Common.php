<?php

class Common{

	private $CI;

	public function __construct(){

		$this->CI = &get_instance();
	}

	public function user_info(){

		if(is_logged_in()){
			$this->CI->data['user_info'] = $this->CI->user_model->get_info();
		}
	}
}