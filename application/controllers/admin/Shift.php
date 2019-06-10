<?php

require APPPATH . '/libraries/REST_Controller.php';

class Shift extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
    }
    function index_get() {
		if($this->get('id')==NULL){
			$q = "SELECT a.* FROM tb_shift a WHERE a.deleted='0'";
			$get_data = $this->db->query($q)->result();
			if($get_data==NULL){
				// $this->response(array('status' => 'Result not found', 502));
//				$this->response(array('status' => '0', 502));
                echo "no_data";
			}else{
				$this->response($get_data, 200);
			}
		}else{
			$q = "SELECT a.* FROM tb_shift a WHERE a.id = '".$this->get('id')."' AND a.deleted='0'";
			$get_data = $this->db->query($q)->result();
			if($get_data==NULL){
				// $this->response(array('status' => 'Result not found', 502));
//				$this->response(array('status' => '0', 502));
                echo "no_data";
			}else{
				$this->response($get_data, 200);
			}
		}
	}
	function index_post() {
		/*
		post jam_masuk
		post jam_keluar
		post nama
		*/
		$q = "INSERT INTO tb_shift(nama_shift, jam_masuk, jam_keluar) VALUES('".$this->post('nama')."','".$this->post('jam_masuk')."','".$this->post('jam_keluar')."')";
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
					'nama_shift'       => $this->put('nama'),
					'jam_masuk'       => $this->put('jam_masuk'),
                    'jam_keluar'    => $this->put('jam_keluar'));
        $this->db->where('id', $this->put('id'));
        $update = $this->db->update('tb_shift', $data);
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
	function index_delete() {
		$post = file_get_contents('php://input');
		$json = json_decode($post, true);
        $data = array(
					'deleted'       => "1");
        $this->db->where('id', $json['id']);
        $update = $this->db->update('tb_shift', $data);
        if ($update) {
			// $this->response(array('status' => 'Update is successful', 200));
			//$this->response(array('status' => '1', 200));
            echo "success";
        } else {
			// $this->response(array('status' => 'Failed, please try again', 502));
			//$this->response(array('status' => '0', 502));
            echo "failed";
        }
    }
}