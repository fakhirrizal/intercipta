<?php

require APPPATH . '/libraries/REST_Controller.php';

class Outlet extends REST_Controller {

	function __construct($config = 'rest') {
		parent::__construct($config);
	}
	function index_get() {
		if($this->get('id_outlet')==NULL){
			$q = "SELECT o.id_outlet, o.nama_outlet, r.nama_region FROM tb_outlet o LEFT JOIN tb_region r ON o.id_region = r.id WHERE o.deleted='0' AND r.deleted='0' ORDER BY `r`.`nama_region`,`o`.`nama_outlet` ASC";
			$get_data = $this->db->query($q)->result();
			if($get_data==NULL){
				// $this->response(array('status' => 'Result not found', 502));
				// $this->response(array('status' => '0', 502));
				echo "no_data";
			}else{
				$this->response($get_data, 200);
			}
		}else{
			$q = "SELECT o.id_outlet, o.nama_outlet, r.nama_region FROM tb_outlet o LEFT JOIN tb_region r ON o.id_region = r.id WHERE o.id_outlet = '".$this->get('id_outlet')."' AND o.deleted='0' AND r.deleted='0' ORDER BY `r`.`nama_region`,`o`.`nama_outlet` ASC";
			$get_data = $this->db->query($q)->result();
			if($get_data==NULL){
				// $this->response(array('status' => 'Result not found', 502));
				// $this->response(array('status' => '0', 502));
				echo "no_data";
			}else{
				$this->response($get_data, 200);
			}
		}
	}
	function index_post() {
		/*
		post id_region
		post id_shift_pagi
		post id_shift_sore
		post nama
		*/
		$cek =  $this->db->query("SELECT a.* FROM tb_outlet a WHERE a.nama_outlet='".$this->post('nama')."' AND a.id_region='".$this->post('id_region')."'")->result();
		if($cek==NULL){
			$q = "INSERT INTO tb_outlet(nama_outlet, id_region) VALUES('".$this->post('nama')."','".$this->post('id_region')."')";
			$insert_to_table = $this->db->query($q);
			if($insert_to_table=='1'){
				// $this->response(array('status' => 'Success', 200));
				// $this->response(array('status' => '1', 200));
				echo "success";
			}else{
				// $this->response(array('status' => 'Failed, please try again!', 502));
				// $this->response(array('status' => '0', 502));
				echo "failed";
			}
		}else{
			echo "Please insert another name";
		}
	}
	function index_put() {
		$cek =  $this->db->query("SELECT a.* FROM tb_outlet a WHERE a.nama_outlet='".$this->post('nama')."' AND a.id_region='".$this->post('id_region')."' AND a.id_outlet NOT IN ('".$this->put('id_outlet')."')")->result();
		if($cek==NULL){
			$data = array(
						'nama_outlet'       => $this->put('nama'),
						'id_region'       => $this->put('id_region'));
			$this->db->where('id_outlet', $this->put('id_outlet'));
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
		}else{
			echo "Please insert another name";
		}
	}
}