<?php

require APPPATH . '/libraries/REST_Controller.php';

class Login extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
    }
    function index_post() {
		if($this->post('email')!='' AND $this->post('password')!=''){
			$where1['email'] = $this->post('email');
			$cek_email = $this->Master_model->getSelectedData('tb_user',$where1);
			if($cek_email==NULL){
				// $this->response(array('status' => 'Email not found', 502));
				echo "not_found";
			}else{
				foreach ($cek_email as $key => $value) {
					if(password_verify($this->post('password'), $value->password)) {
						$this->response($cek_email, 200);
					}else{
						// $this->response(array('status' => 'Invalid password', 502));
						echo "invalid";
					}
				}
			}
		}else{
			// $this->response(array('status' => 'Please insert username or password', 502));
			echo "empty";
		}
    }
}