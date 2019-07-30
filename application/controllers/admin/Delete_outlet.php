<?php

require APPPATH . '/libraries/REST_Controller.php';

class Delete_outlet extends REST_Controller {

	function __construct($config = 'rest') {
		parent::__construct($config);
	}
	function index_get() {
		// $post = file_get_contents('php://input');
		// $json = json_decode($post, true);
		if($this->get('id_outlet')==NULL){
			echo 'failed';
		}else{
			$data = array(
				'deleted'       => '1');
			$this->db->where('id_outlet', $this->get('id_outlet'));
			$update = $this->db->update('tb_outlet', $data);
			if ($update) {
				// $this->response(array('status' => 'Update is successful', 200));
				// $this->response(array('status' => '1', 200));
				echo "success";
			} else {
				// $this->response(array('status' => 'Failed, please try again', 502));
				// $this->response(array('status' => '0', 502));
				echo "failed";
			}
		}
	}
}