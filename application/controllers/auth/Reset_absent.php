<?php

require APPPATH . '/libraries/REST_Controller.php';

class Reset_absent extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
    }
    function index_post() {
		if($this->post('id_user')!=''){
			$data = array(
                'status_absen'       => 'keluar',
                'absen_today'       => 'tidak'
            );
            $this->db->where('id_user', $this->post('id_user'));
            $update = $this->db->update('tb_user', $data);
            if ($update) {
                echo "success";
            } else {
                echo "failed";
            }
		}else{
			echo "failed";
		}
    }
}