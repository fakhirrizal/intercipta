<?php

require APPPATH . '/libraries/REST_Controller.php';

class Region extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
    }
    function index_get() {
		if($this->get('id')==NULL){
			$q = "SELECT a.id,a.nama_region,a.provinsi FROM tb_region a WHERE a.deleted='0' ORDER BY `a`.`nama_region` ASC";
			$get_data = $this->db->query($q)->result();
			if($get_data==NULL){
				// $this->response(array('status' => 'Result not found', 502));
				// $this->response(array('status' => '0', 502));
                echo "no_data";
			}else{
				$this->response($get_data, 200);
			}
		}else{
			$q = "SELECT a.id,a.nama_region,a.provinsi FROM tb_region a WHERE a.id = '".$this->get('id')."' AND a.deleted='0' ORDER BY `a`.`nama_region` ASC";
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
		post prov
		post nama
		*/
		$q = "INSERT INTO tb_region(nama_region, provinsi) VALUES('".$this->post('nama')."','".$this->post('prov')."')";
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
	}
	function index_put() {
        $data = array(
					'nama_region'       => $this->put('nama'),
                    'provinsi'    => $this->put('prov'));
        $this->db->where('id', $this->put('id'));
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
	}
}