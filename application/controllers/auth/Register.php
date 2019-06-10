<?php

require APPPATH . '/libraries/REST_Controller.php';

class Register extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
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
				// $this->response(array('status' => 'Success', 200));
				$this->response(array('status' => '1', 200));
			}else{
				// $this->response(array('status' => 'Failed, please try again!', 502));
				$this->response(array('status' => '0', 502));
			}
		}else{
			$q = "INSERT INTO tb_user(nik, nama, alamat, email, password, nohp, level) VALUES('".$this->post('nik')."','".$this->post('nama')."','".$this->post('alamat')."','".$this->post('email')."','".$enc_password."','".$this->post('nohp')."','".$this->post('level')."')";
			$insert_to_table = $this->db->query($q);
			if($insert_to_table=='1'){
				// $this->response(array('status' => 'Success', 200));
				$this->response(array('status' => '1', 200));
			}else{
				// $this->response(array('status' => 'Failed, please try again!', 502));
				$this->response(array('status' => '0', 502));
			}
		}
    }
}