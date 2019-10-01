<?php

require APPPATH . '/libraries/REST_Controller.php';

class Logout extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
    }
    function index_post() {
		if($this->post('id_user')!=''){
			$where1['id_user'] = $this->post('id_user');
			$cek_email = $this->Master_model->getSelectedData('tb_user',$where1);
			if($cek_email==NULL){
				// $this->response(array('status' => 'Email not found', 502));
				echo "not_found";
			}else{
				foreach ($cek_email as $key => $value) {
                    $data = array(
                        'login_status'    => '0');
                    $this->db->where('id_user', $value->id_user);
                    $update = $this->db->update('tb_user', $data);
                    if ($update) {
                        // $this->response(array('status' => 'Update is successful', 200));
                        echo "success";
                    } else {
                        // $this->response(array('status' => 'Failed, please try again', 502));
                        echo "failed";
                    }
				}
			}
		}else{
			// $this->response(array('status' => 'Please insert username or password', 502));
			echo "empty";
		}
    }
}