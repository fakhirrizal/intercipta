<?php

require APPPATH . '/libraries/REST_Controller.php';

class Status_login extends REST_Controller {

	function __construct($config = 'rest') {
		parent::__construct($config);
	}
	function index_put() {
		$cek =  $this->db->query("SELECT a.* FROM tb_user a WHERE a.id_user='".$this->put('id_user')."'")->row();
		if($cek!=NULL){
            if($cek->login_status=='0'){
                $data = array(
                            'status'       => '1');
                $this->db->where('id_user', $this->put('id_user'));
                $update = $this->db->update('tb_user', $data);
                if ($update) {
                    echo "success";
                } else {
                    echo "failed";
                }
            }else{
                $data = array(
                    'status'       => '0');
                $this->db->where('id_user', $this->put('id_user'));
                $update = $this->db->update('tb_user', $data);
                if ($update) {
                    echo "success";
                } else {
                    echo "failed";
                }
            }
		}else{
			echo "failed";
		}
	}
}