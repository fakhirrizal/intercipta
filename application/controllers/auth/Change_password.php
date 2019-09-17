<?php

require APPPATH . '/libraries/REST_Controller.php';

class Change_password extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
    }
    function index_post() {
        $this->db->trans_start();
        $p = password_hash($this->post('password_baru'), PASSWORD_DEFAULT);
        $this->db->where('id_user', $this->post('id_user'));
		$update = $this->db->update('tb_user', array('password'=>$p,'updated_at'=>date('Y-m-d H:i:s')));
        $this->db->trans_complete();
		if($this->db->trans_status() === false){
			$this->response(array('status' => '0', 200));
		}
		else{
			$this->response(array('status' => '1', 200));
		}
    }
}