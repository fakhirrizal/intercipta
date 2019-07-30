<?php

require APPPATH . '/libraries/REST_Controller.php';

class Location extends REST_Controller {

	function __construct($config = 'rest') {
		parent::__construct($config);
	}
	function index_get() {
		if($this->get('id_user')!=NULL){
			$q = "SELECT b.nama,a.lat,a.lng FROM tb_lokasi a LEFT JOIN tb_user b ON a.id_user=b.id_user WHERE a.id_user='".$this->get('id_user')."'";
			$get_data = $this->db->query($q)->result();
			if($get_data==NULL){
				echo "no_data";
			}else{
				$this->response($get_data, 200);
			}
		}else{
			echo 'no_data';
		}
	}
	function index_post() {
		$datetime = date('Y-m-d H:i:s');
		$querycek = $this->Master_model->get('tb_lokasi', '*', array('id_user' => $this->post('id_user')))->result();
		if($querycek==NULL){
			$q = "INSERT INTO tb_lokasi(id_user, lat, lng, created_at) VALUES('".$this->post('id_user')."','".$this->post('lat')."','".$this->post('lng')."','".$datetime."')";
			$insert_to_table = $this->db->query($q);
			if($insert_to_table=='1'){
				echo "success";
			}else{
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