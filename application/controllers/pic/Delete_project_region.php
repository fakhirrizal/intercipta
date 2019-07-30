<?php

require APPPATH . '/libraries/REST_Controller.php';

class Delete_project_region extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
	}
	function index_get() {
		if($this->get('id_project_region')==NULL){
			echo "failed";
		}else{
			$where = array(
				'id'       => $this->get('id_project_region'));
			$delete = $this->db->delete('tb_project_region', $where);
			if ($delete) {
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