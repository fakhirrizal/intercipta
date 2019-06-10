<?php

require APPPATH . '/libraries/REST_Controller.php';

class Outlet2 extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
	}
	function index_get() {
		$q = "SELECT a.id,b.nama AS nama_fl FROM tb_fl_to_outlet a LEFT JOIN tb_user b ON a.id_fl=b.id_user WHERE a.id_outlet='".$this->get('id_outlet')."'";
		$get_data = $this->db->query($q)->result();
		if($get_data==NULL){
			// $this->response(array('status' => 'Result not found', 502));
			echo "no_data";
		}else{
			$this->response($get_data, 200);
		}
	}
}