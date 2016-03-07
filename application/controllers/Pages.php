<?php

defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

class Pages extends CI_Controller
{
    public function home()
    { 
        $this->layout->render('home'); 
    }
}
