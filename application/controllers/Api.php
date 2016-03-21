
<?php

header('Access-Control-Allow-Origin: *');

require APPPATH . '/libraries/REST_Controller.php';

class Api extends REST_Controller {

    public function users_get() {

        if (empty($id = $this->get('id'))) {
            $users = $this->user_model->get_users();
	        $this->response($users, REST_Controller::HTTP_OK);

        } else {
        	if ($user = $this->user_model->get_user($this->get('id'))) {
        		$this->response($user, REST_Controller::HTTP_OK);
        	} else {
                $this->response([
                    'status' => FALSE,
                    'message' => 'No user found'
                ], REST_Controller::HTTP_NOT_FOUND);
        	}
        }
    }

    public function users_post() {    
        // ToDo: check if user already exists

        
        if($test = $this->user_model->check_username($this->post('username'))){
            var_dump($test);
            $this->response([ 'status' => FALSE, 'message' => 'This username is taken.'], REST_Controller::HTTP_OK);
        } else {
            $this->user_model->set_user($this->post());
            $this->response([ 'status' => TRUE, 'message' => 'User created successfully!'], REST_Controller::HTTP_OK);
        }

        if($this->user_model->check_email($this->post('email'))){
            $this->response([ 'status' => FALSE, 'message' => 'This email is taken.'], REST_Controller::HTTP_OK);
        } else {
            $this->user_model->set_user($this->post());
            $this->response([ 'status' => TRUE, 'message' => 'User created successfully!'], REST_Controller::HTTP_OK);
        }
    }

}