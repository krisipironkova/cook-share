
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

        if($check_username = $this->user_model->check_username($this->post('username'))){
            var_dump($check_username);
            $this->response([ 'status' => FALSE, 'message' => 'This username is taken.'], REST_Controller::HTTP_OK);
        } else {
            $this->user_model->set_user($this->post());
            $this->response([ 'status' => TRUE, 'message' => 'User created successfully!'], REST_Controller::HTTP_OK);
        }

        if($check_email = $this->user_model->check_email($this->post('email'))){
            var_dump($check_email);
            $this->response([ 'status' => FALSE, 'message' => 'This email is taken.'], REST_Controller::HTTP_OK);
        } else {
            $this->user_model->set_user($this->post());
            $this->response([ 'status' => TRUE, 'message' => 'User created successfully!'], REST_Controller::HTTP_OK);
        }
    }

}