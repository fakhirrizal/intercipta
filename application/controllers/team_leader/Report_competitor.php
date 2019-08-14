<?php

require APPPATH . '/libraries/REST_Controller.php';

class Report_competitor extends REST_Controller {

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
		$sekarang = date("Ymd_His");
		$file_name = $sekarang.".jpg";
		$actual_path = "/home/opit5917/public_html/api-intercipta.aplikasiku.online/assets/tl_report/".$file_name;
		$actual_path2 = base_url()."assets/tl_report/".$file_name;
		$image = $this->post('foto');
		if (file_put_contents($actual_path, base64_decode($image)) != null) {
			$q = "INSERT INTO tb_report_competitor(id_user,foto,deskripsi,waktu) VALUES('".$this->post('id_user')."','".$actual_path2."','".$this->post('deskripsi')."','".date('Y-m-d H:i:s')."')";
			$insert_to_table = $this->db->query($q);
			if($insert_to_table=='1'){
				echo "success";
			}else{
				echo "failed";
			}
		}else{
			echo "no_data";
		}
	}
	function index_put() {
		$sekarang = date("Ymd_His");
		$file_name = $sekarang.".jpg";
		$actual_path = base_url()."assets/tl_report/".$file_name;
		$image = $this->put('foto');
		if($this->put('foto')==NULL){
			$data = array(
					'id_user'       => $this->put('id_user'),
					'deskripsi'       => $this->put('deskripsi'),
					'waktu'       => date('Y-m-d H:i:s')
				);
			$this->db->where('id_report_competitor', $this->put('id_report_competitor'));
			$update = $this->db->update('tb_report_competitor', $data);
			if ($update) {
				echo "success";
			} else {
				echo "failed";
			}
		}else{
			if (file_put_contents($actual_path, base64_decode($image)) != null) {
				$data = array(
					'id_user'       => $this->put('id_user'),
					'foto'			=> $actual_path,
					'deskripsi'    => $this->put('deskripsi'),
					'waktu'       => date('Y-m-d H:i:s')
				);
				$this->db->where('id_report_competitor', $this->put('id_report_competitor'));
				$update = $this->db->update('tb_report_competitor', $data);
				if ($update) {
					echo "success";
				} else {
					echo "failed";
				}
			}else{
				echo "no_data";
			}
		}
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