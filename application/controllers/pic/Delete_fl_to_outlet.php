<?php

require APPPATH . '/libraries/REST_Controller.php';

class Delete_fl_to_outlet extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
	}
	function index_get() {
		if($this->get('id')!=NULL){
			$where = array(
				'id'       => $this->get('id'));
			$delete = $this->db->delete('tb_fl_to_outlet', $where);
			if ($delete) {
				// $this->response(array('status' => 'Update is successful', 200));
				// $this->response(array('status' => '1', 200));
				echo "success";
			} else {
				// $this->response(array('status' => 'Failed, please try again', 502));
				// $this->response(array('status' => '0', 502));
				echo "failed";
			}
		}else{
			echo "failed";
		}
	}
}