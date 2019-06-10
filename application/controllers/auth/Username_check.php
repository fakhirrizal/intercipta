<?php

require APPPATH . '/libraries/REST_Controller.php';

class Username_check extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
    }
    function index_post() {
		$where1['email'] = $this->post('email');
		$cek_email = $this->Master_model->getSelectedData('tb_user',$where1);
		if($cek_email==NULL){
			// $this->response(array('status' => 'Email is available', 200));
			$this->response(array('status' => '1', 200));	
		}else{
			// $this->response(array('status' => 'Please enter another email', 502));
			$this->response(array('status' => '0', 502));
		}
    }
}