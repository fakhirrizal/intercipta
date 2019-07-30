<?php

require APPPATH . '/libraries/REST_Controller.php';

class Project_region extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
	}
	function index_get() {
		if($this->get('id_project_region')==NULL){
			$q = "SELECT a.id,b.nama_project,c.nama_region FROM tb_project_region a LEFT JOIN tb_project b ON a.kode_project=b.kode_project LEFT JOIN tb_region c ON a.id_region=c.id WHERE b.status='1' AND b.deleted='0' AND c.deleted='0'";
			$get_data = $this->db->query($q)->result();
			if($get_data==NULL){
				// $this->response(array('status' => 'Result not found', 502));
				echo "no_data";
			}else{
				$this->response($get_data, 200);
			}
		}else{
			$q = "SELECT a.id,b.nama_project,c.nama_region FROM tb_project_region a LEFT JOIN tb_project b ON a.kode_project=b.kode_project LEFT JOIN tb_region c ON a.id_region=c.id WHERE a.status='1' AND b.deleted='0' AND c.deleted='0' AND a.id = '".$this->get('id_project_region')."'";
			$get_data = $this->db->query($q)->result();
			if($get_data==NULL){
				// $this->response(array('status' => 'Result not found', 502));
				echo "no_data";
			}else{
				$this->response($get_data, 200);
			}
		}
	}
	function index_put() {
		$cek = $this->db->query("SELECT a.* FROM tb_user a WHERE a.id_user='".$this->put('id_user')."'")->row();
		if($cek->level=='tl'){
			$data = array(
						'id_tl'       => $this->put('id_user'));
			$this->db->where('id', $this->put('id_project_region'));
			$update = $this->db->update('tb_project_region', $data);
			if ($update) {
				// $this->response(array('status' => 'Update is successful', 200));
				//	$this->response(array('status' => '1', 200));
				echo "success";
			} else {
				// $this->response(array('status' => 'Failed, please try again', 502));
				//	$this->response(array('status' => '0', 502));
				echo "failed";
			}
		}else{
			echo 'failed';
		}
	}
}