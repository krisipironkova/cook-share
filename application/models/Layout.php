<?php

class Layout extends CI_Model{

    function render($page){

	    $this->load->view('includes/header');
	    $this->load->view('pages/' . $page );
	    $this->load->view('includes/footer');   
    }
}