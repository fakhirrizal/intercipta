<?php

require APPPATH . '/libraries/REST_Controller.php';

class Report_competitor_tl extends REST_Controller {

	function __construct($config = 'rest') {
		parent::__construct($config);
	}
	function index_get() {
		if($this->get('id_tl')!=NULL){
			$q = "SELECT a.id_report_competitor,b.nama,a.foto,a.deskripsi,a.waktu FROM tb_report_competitor a LEFT JOIN tb_user b ON a.id_user=b.id_user WHERE a.id_user='".$this->get('id_tl')."'";
			$get_data = $this->db->query($q)->result();
			if($get_data==NULL){
				echo "no_data";
			}else{
				$this->response($get_data, 200);
			}
		}elseif($this->get('id_report_competitor')!=NULL){
			$q = "SELECT a.id_report_competitor,b.nama,a.foto,a.deskripsi,a.waktu FROM tb_report_competitor a LEFT JOIN tb_user b ON a.id_user=b.id_user WHERE a.id_report_competitor='".$this->get('id_report_competitor')."'";
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
		// something that you want
	}
	function index_put() {
		// something that you want
	}
	// function index_delete() {
	// 	$post = file_get_contents('php://input');
	// 	$json = json_decode($post, true);
	// 	$this->db->where('id', $json['id_laporan']);
	// 	$update = $this->db->delete('tb_lapor_fl', $data);
	// 	if ($update) {
	// 		$this->response(array('status' => 'Update is successful', 200));
	// 		$this->response(array('status' => '1', 200));
	// 	} else {
	// 		$this->response(array('status' => 'Failed, please try again', 502));
	// 		$this->response(array('status' => '0', 502));
	// 	}
	// }
}