<?php

require APPPATH . '/libraries/REST_Controller.php';

class Report_kadaluarsa extends REST_Controller {

	function __construct($config = 'rest') {
		parent::__construct($config);
	}
	function index_get() {
		if($this->get('id_user')!=NULL){
			$q = "SELECT a.id_report_kadaluarsa,a.foto,a.kode_produk,p.nama_produk,a.jumlah,a.tgl_masuk,a.tgl_kadaluarsa,a.keterangan FROM tb_report_kadaluarsa a LEFT JOIN tb_produk p ON a.kode_produk=p.kode_produk WHERE a.id_user='".$this->get('id_user')."' ORDER BY a.id_report_kadaluarsa DESC";
			$get_data = $this->db->query($q)->result();
			if($get_data==NULL){
				echo "no_data";
			}else{
				$this->response($get_data, 200);
			}
		}elseif($this->get('id_report_kadaluarsa')!=NULL){
			$q = "SELECT a.id_report_kadaluarsa,a.foto,a.kode_produk,p.nama_produk,a.jumlah,a.tgl_masuk,a.tgl_kadaluarsa,a.keterangan FROM tb_report_kadaluarsa a LEFT JOIN tb_produk p ON a.kode_produk=p.kode_produk WHERE a.id_report_kadaluarsa='".$this->get('id_report_kadaluarsa')."' ORDER BY a.id_report_kadaluarsa DESC";
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
		$actual_path = "/home/aplikasi/public_html/intercipta/assets/pic_report/".$file_name;
		$actual_path2 = base_url()."assets/pic_report/".$file_name;
		$image = $this->post('foto');
		if (file_put_contents($actual_path, base64_decode($image)) != null) {
			$q = "INSERT INTO tb_report_kadaluarsa(id_user,foto,kode_produk,jumlah,tgl_masuk,tgl_kadaluarsa,keterangan) VALUES('".$this->post('id_user')."','".$actual_path2."','".$this->post('kode_produk')."','".$this->post('jumlah')."','".$this->post('tgl_masuk')."','".$this->post('tgl_kadaluarsa')."','".$this->post('keterangan')."')";
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
		$actual_path = base_url()."assets/pic_report/".$file_name;
		$image = $this->put('foto');
		if($this->put('foto')==NULL){
			$data = array(
					'id_user'       => $this->put('id_user'),
					'kode_produk'       => $this->put('kode_produk'),
					'jumlah'       => $this->put('jumlah'),
					'tgl_masuk'       => $this->put('tgl_masuk'),
					'tgl_kadaluarsa'       => $this->put('tgl_kadaluarsa'),
					'keterangan'       => $this->put('keterangan')
				);
			$this->db->where('id_report_kadaluarsa', $this->put('id_report_kadaluarsa'));
			$update = $this->db->update('tb_report_kadaluarsa', $data);
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
					'kode_produk'       => $this->put('kode_produk'),
					'jumlah'       => $this->put('jumlah'),
					'tgl_masuk'       => $this->put('tgl_masuk'),
					'tgl_kadaluarsa'       => $this->put('tgl_kadaluarsa'),
					'keterangan'       => $this->put('keterangan')
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