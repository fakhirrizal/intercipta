<?php

require APPPATH . '/libraries/REST_Controller.php';

class User_location extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
    }
    function index_get() {
		if($this->get('id_user')!=NULL){
			$q = "SELECT b.nama,a.lat,a.lng FROM tb_lokasi a LEFT JOIN tb_user b ON a.id_user = b.id_user WHERE a.id_user='".$this->get('id_user')."'";
			$get_data = $this->db->query($q)->result();
			if($get_data==NULL){
				// $this->response(array('status' => 'Result not found', 502));
				// $this->response(array('status' => '0', 502));
                echo "no_data";
			}else{
				$today = date('Y-m-d');
				$q2 = "SELECT a.* FROM tb_user a RIGHT JOIN tb_absensi b ON a.nik=b.nik_user WHERE a.id_user='".$this->get('id_user')."' AND b.tgl_absensi LIKE '%".$today."%'";
				$cek_absen = $this->db->query($q2)->result();
				if($cek_absen==NULL){
					echo 'no_absent';
				}else{
					$this->response($get_data, 200);
				}
			}
		}else{
			echo "no_data";
		}
	}
	function index_post() {
		/*
		post id_region
		post id_shift_pagi
		post id_shift_sore
		post nama
		*/
		$datetime = date('Y-m-d H:i:s');
		$querycek = $this->Master_model->get('tb_lokasi', '*', array('id_user' => $this->post('id_user')))->result();
		if($querycek==NULL){
			$q = "INSERT INTO tb_lokasi(id_user, lat, lng, created_at) VALUES('".$this->post('id_user')."','".$this->post('lat')."','".$this->post('lng')."','".$datetime."')";
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
			$this->db->trans_start();
			$dataupdate = array(
				'lat' => $this->post('lat'),
				'lng' => $this->post('lng'),
				'created_at' => $datetime
			);
			$this->Master_model->updateData('tb_lokasi',$dataupdate,array('id_user' => $this->post('id_user')));
			$this->db->trans_complete();
			if($this->db->trans_status() === false){
				echo 'failed';
			}
			else{
				echo 'success';
			}
		}
	}
}