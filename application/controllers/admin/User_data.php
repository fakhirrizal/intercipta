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
			$q = "SELECT a.id_user,a.nik,a.nama,a.alamat,a.email,a.password,a.nohp,a.level,a.status_absen,a.absen_today,a.keterangan_absen,b.nama_shift,c.nama_region,a.created_at,a.updated_at FROM tb_user a LEFT JOIN tb_shift b ON a.id_shift=b.id LEFT JOIN tb_region c ON a.id_region=c.id WHERE a.level = '".$this->get('level')."'";
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
		$cur_date = date('Y-m-d H:i:s');
		if($this->post('level') == "fl" || $this->post('level') == "non_fl"){
			$q = "INSERT INTO tb_user(nik, nama, alamat, email, password, nohp, level, id_shift, created_at) VALUES('".$this->post('nik')."','".$this->post('nama')."','".$this->post('alamat')."','".$this->post('email')."','".$enc_password."','".$this->post('nohp')."','".$this->post('level')."','".$this->post('id_shift')."','".$cur_date."')";
			$insert_to_table = $this->db->query($q);
			if($insert_to_table=='1'){
				//$this->response(array('status' => 'Success', 200));
                echo "success";
			}else{
				//$this->response(array('status' => 'Failed, please try again!', 502));
                echo "failed";
			}
		}else{
			$q = "INSERT INTO tb_user(nik, nama, alamat, email, password, nohp, level, id_region, created_at) VALUES('".$this->post('nik')."','".$this->post('nama')."','".$this->post('alamat')."','".$this->post('email')."','".$enc_password."','".$this->post('nohp')."','".$this->post('level')."','".$this->post('id_region')."','".$cur_date."')";
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
					'nohp'    => $this->put('nohp'),
					'id_shift'    => $this->put('id_shift'),
					'id_region'    => $this->put('id_region'),
					'updated_at' => date('Y-m-d H:i:s'));
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