
<?php

header('Access-Control-Allow-Origin: *');

require APPPATH . '/libraries/REST_Controller.php';

class Api extends REST_Controller {

    public function users_get() {

        if(empty($id = $this->get('id'))){
            $users = $this->user_model->get_users();
	        $this->response($users, REST_Controller::HTTP_OK);
        }else{
        	if($user = $this->user_model->get_user($this->get('id'))){
        		$this->response($user, REST_Controller::HTTP_OK);
        	}else{
                $this->response([
                    'status' => FALSE,
                    'message' => 'No user found'
                ], REST_Controller::HTTP_NOT_FOUND);
        	}
        }
        
    }

    public function users_post() {    
        if($test = $this->post('type') === 'register'){
            $this->register($this->post());           
        }elseif ($this->post('type') === 'login'){
            $this->login($this->post());
        }elseif($this->post('type') === 'form'){
            $this->set_recipe($this->post());
        }

    }

    private function register($post) {
        if($this->user_model->check_username($post['username'])){
            $this->response(['status' => FALSE, 'message' => 'This username is taken.'], REST_Controller::HTTP_OK);
        }elseif($this->user_model->check_email($post['email'])){
            $this->response(['status' => FALSE, 'message' => 'This email is taken.'], REST_Controller::HTTP_OK);
        }else{
            $this->user_model->set_user($post);
            $this->response([ 'status' => TRUE, 'message' => 'User created successfully!'], REST_Controller::HTTP_OK);            
        }
    }

    private function login($post) {
        if(!$this->user_model->login($post['email'], $post['password'])){
            $this->response(['status' => FALSE, 'message' => 'Wrong email or password']);
        }else{
            $this->response(['status' => TRUE, 'message' => 'Logged in successfully!']);
        }
    }

    private function set_recipe($post){
        //var_dump($post);
        $this->recipe_model->set_recipe($post);
        $this->response(['status' => TRUE, 'message' => 'Recipe uploaded successfully!']);
    }
}