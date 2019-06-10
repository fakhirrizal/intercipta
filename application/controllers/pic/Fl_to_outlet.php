<?php

require APPPATH . '/libraries/REST_Controller.php';

class Fl_to_outlet extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
    }
    function index_post() {
		/*
		post id_region
		post id_shift_pagi
		post id_shift_sore
		post nama
		*/
		$q = "INSERT INTO tb_fl_to_outlet(id_outlet, id_fl, id_shift) VALUES('".$this->post('id_outlet')."','".$this->post('id_user')."','".$this->post('id_shift')."')";
		$insert_to_table = $this->db->query($q);
		if($insert_to_table=='1'){
			// $this->response(array('status' => 'Success', 200));
//			$this->response(array('status' => '1', 200));
            echo "success";
		}else{
			// $this->response(array('status' => 'Failed, please try again!', 502));
//			$this->response(array('status' => '0', 502));
            echo "failed";
		}
	}
	function index_put() {
        $data = array(
					'id_outlet'       => $this->put('id_outlet'),
					'id_fl'       => $this->put('id_user'),
                    'id_shift'    => $this->put('id_shift'));
        $this->db->where('id', $this->put('id'));
        $update = $this->db->update('tb_fl_to_outlet', $data);
        if ($update) {
			// $this->response(array('status' => 'Update is successful', 200));
//			$this->response(array('status' => '1', 200));
            echo "success";
        } else {
			// $this->response(array('status' => 'Failed, please try again', 502));
//			$this->response(array('status' => '0', 502));
			echo "failed";
        }
	}
}