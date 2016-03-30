<?php
	
function is_logged_in(){

	//get instance, access the CI superobject
	$CI = &get_instance();
	// getting user_id variable from session
	$is_logged_in = $CI->session->userdata('user_id');
	// if exists
	if($is_logged_in){
		return true;
	}

	return false;
}