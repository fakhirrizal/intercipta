<?php

require APPPATH . '/libraries/REST_Controller.php';

class User_data extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
    }
    function index_get() {
		if($this->get('level')==NULL){
			$q = "SELECT * FROM tb_user";
			$get_data = $this->db->query($q)->result();
			if($get_data==NULL){
				// $this->response(array('status' => 'Result not found', 502));
			    echo 'no_data';
			}else{
				$this->response($get_data, 200);
			}
		}else{
			$q = "SELECT * FROM tb_user WHERE level = '".$this->get('level')."'";
			$get_data = $this->db->query($q)->result();
			if($get_data==NULL){
				// $this->response(array('status' => 'Result not found', 502));
				echo 'no_data';
			}else{
				$this->response($get_data, 200);
			}
		}
	}

	function index_post() {
		/*
		post nik
		post nama
		post alamat
		post email
		post password
		post nohp
		post level
		post id_shift
		*/
		$enc_password = password_hash($this->post('password'), PASSWORD_DEFAULT);
		if($this->post('level') == "fl" || $this->post('level') == "non_fl"){
			$q = "INSERT INTO tb_user(nik, nama, alamat, email, password, nohp, level, id_shift) VALUES('".$this->post('nik')."','".$this->post('nama')."','".$this->post('alamat')."','".$this->post('email')."','".$enc_password."','".$this->post('nohp')."','".$this->post('level')."','".$this->post('id_shift')."')";
			$insert_to_table = $this->db->query($q);
			if($insert_to_table=='1'){
				//$this->response(array('status' => 'Success', 200));
                echo "success";
			}else{
				//$this->response(array('status' => 'Failed, please try again!', 502));
                echo "failed";
			}
		}else{
			$q = "INSERT INTO tb_user(nik, nama, alamat, email, password, nohp, level, id_region) VALUES('".$this->post('nik')."','".$this->post('nama')."','".$this->post('alamat')."','".$this->post('email')."','".$enc_password."','".$this->post('nohp')."','".$this->post('level')."','".$this->post('id_region')."')";
			$insert_to_table = $this->db->query($q);
			if($insert_to_table=='1'){
				//$this->response(array('status' => 'Success', 200));
                echo "success";
			}else{
				//$this->response(array('status' => 'Failed, please try again!', 502));
                echo "failed";
			}
		}
	}

	function index_put() {
        $data = array(
					'nik'       => $this->put('nik'),
					'nama'       => $this->put('nama'),
					'alamat'       => $this->put('alamat'),
					'email'       => $this->put('email'),
                    'nohp'    => $this->put('nohp'));
        $this->db->where('id_user', $this->put('id_user'));
        $update = $this->db->update('tb_user', $data);
        if ($update) {
            //$this->response(array('status' => 'Update is successful', 200));
            echo "success";
        } else {
            //$this->response(array('status' => 'Failed, please try again', 502));
            echo "failed";
        }
    }
}