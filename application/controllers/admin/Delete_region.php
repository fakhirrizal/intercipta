<?php

require APPPATH . '/libraries/REST_Controller.php';

class Delete_region extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
    }
	function index_delete() {
		// $post = file_get_contents('php://input');
		// $json = json_decode($post, true);
        $data = array(
					'deleted'       => '1');
        $this->db->where('id', $this->delete('id'));
        $update = $this->db->update('tb_region', $data);
        if ($update) {
			// $this->response(array('status' => 'Update is successful', 200));
			// $this->response(array('status' => '1', 200));
            echo "success";
        } else {
			// $this->response(array('status' => 'Failed, please try again', 502));
			// $this->response(array('status' => '0', 502));
            echo "failed";
		}
		// echo $json['id'];
    }
}