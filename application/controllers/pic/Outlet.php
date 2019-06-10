<?php

require APPPATH . '/libraries/REST_Controller.php';

class Outlet extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
	}
	function index_get() {
		$q = "SELECT a.id_outlet,a.nama_outlet,d.nama AS nama_tl FROM tb_outlet a LEFT JOIN tb_project_region b ON a.id_project_region=b.id LEFT JOIN tb_user d ON b.id_tl=d.id_user WHERE a.id_outlet='".$this->get('id_outlet')."' AND a.deleted='0'";
		$get_data['data_utama'] = $this->db->query($q)->result();
		$q = "SELECT b.nama AS nama_fl,c.nama_shift FROM tb_fl_to_outlet a LEFT JOIN tb_user b ON a.id_fl=b.id_user LEFT JOIN tb_shift c ON a.id_shift=c.id WHERE a.id_outlet='".$this->get('id_outlet')."' AND c.deleted='0'";
		$get_data['data_fl'] = $this->db->query($q)->result();
		if($get_data==NULL){
			// $this->response(array('status' => 'Result not found', 502));
			echo "no_data";
		}else{
			$this->response($get_data, 200);
		}
	}
}