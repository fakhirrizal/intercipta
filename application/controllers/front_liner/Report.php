<?php

require APPPATH . '/libraries/REST_Controller.php';

class Report extends REST_Controller {

	function __construct($config = 'rest') {
		parent::__construct($config);
	}
	function index_get() {
		if($this->get('id_laporan')!=NULL){
			// $q = "SELECT a.id AS id_laporan,a.tgl_laporan,b.nama_outlet,a.kode_produk,a.kondisi,a.jumlah,a.foto,a.keterangan,a.tgl_masuk,a.tgl_kadaluarsa FROM tb_lapor_fl a LEFT JOIN tb_outlet b ON a.id_outlet=b.id_outlet WHERE a.id='".$this->get('id_laporan')."'";
			$q = "SELECT a.id AS id_laporan,a.tgl_laporan,z.nama_produk,a.kode_produk,a.kondisi,a.jumlah,a.foto,a.keterangan,a.tgl_masuk,a.tgl_keluar,a.tgl_kadaluarsa FROM tb_lapor_fl a LEFT JOIN tb_outlet b ON a.id_outlet=b.id_outlet LEFT JOIN tb_produk z ON a.kode_produk=z.kode_produk WHERE a.id='".$this->get('id_laporan')."'";
			$get_data = $this->db->query($q)->result();
			if($get_data==NULL){
				echo "no_data";
			}else{
				$this->response($get_data, 200);
			}
		}elseif($this->get('id_fl')!=NULL){
			// $q = "SELECT a.id AS id_laporan,a.tgl_laporan,b.nama_outlet,a.kode_produk,a.kondisi,a.jumlah,a.foto,a.keterangan,a.tgl_masuk,a.tgl_kadaluarsa FROM tb_lapor_fl a LEFT JOIN tb_outlet b ON a.id_outlet=b.id_outlet WHERE a.nik_fl='".$this->get('id_fl')."'";
			$q = "SELECT a.id AS id_laporan,a.tgl_laporan,z.nama_produk,a.kode_produk,a.kondisi,a.jumlah,a.foto,a.keterangan,a.tgl_masuk,a.tgl_keluar,a.tgl_kadaluarsa FROM tb_lapor_fl a LEFT JOIN tb_outlet b ON a.id_outlet=b.id_outlet LEFT JOIN tb_produk z ON a.kode_produk=z.kode_produk WHERE a.nik_fl='".$this->get('id_fl')."'";
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

		// upload photo to server
		$file_name = $sekarang.".jpg";
		$actual_path = "/home/u793339166/public_html/api-intercipta/assets/fl_report/".$file_name;
		$actual_path2 = base_url()."assets/fl_report/".$file_name;
		$image = $this->post('foto');
		if (file_put_contents($actual_path, base64_decode($image)) != null) {
			$q = "INSERT INTO tb_lapor_fl(tgl_laporan,id_outlet, nik_fl, kode_produk,kondisi,jumlah,foto,keterangan,tgl_masuk,tgl_keluar,tgl_kadaluarsa) VALUES('".$this->post('tgl_laporan')."','".$this->post('id_outlet')."','".$this->post('id_user')."','".$this->post('kode_produk')."','".$this->post('kondisi')."','".$this->post('jumlah')."','".$actual_path2."','".$this->post('keterangan')."','".$this->post('tgl_masuk')."','".$this->post('tgl_keluar')."','".$this->post('tgl_kadaluarsa')."')";
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

		// upload photo to server
		$file_name = $sekarang.".jpg";
		$actual_path = base_url()."assets/fl_report/".$file_name;
		$image = $this->put('foto');
		if($this->put('foto')==NULL){
			$data = array(
					'tgl_laporan'       => $this->put('tgl_laporan'),
					'id_outlet'       => $this->put('id_outlet'),
					'nik_fl'       => $this->put('id_user'),
					'kode_produk'    => $this->put('kode_produk'),
					'kondisi'       => $this->put('kondisi'),
					'jumlah'       => $this->put('jumlah'),
					'keterangan'    => $this->put('keterangan'),
					'tgl_masuk'       => $this->put('tgl_masuk'),
					'tgl_keluar'       => $this->put('tgl_keluar'),
					'tgl_kadaluarsa'    => $this->put('tgl_kadaluarsa')
				);
			$this->db->where('id', $this->put('id_laporan'));
			$update = $this->db->update('tb_lapor_fl', $data);
			if ($update) {
				echo "success";
			} else {
				echo "failed";
			}
		}else{
			if (file_put_contents($actual_path, base64_decode($image)) != null) {
				$data = array(
					'tgl_laporan'       => $this->put('tgl_laporan'),
					'id_outlet'       => $this->put('id_outlet'),
					'nik_fl'       => $this->put('id_user'),
					'kode_produk'    => $this->put('kode_produk'),
					'kondisi'       => $this->put('kondisi'),
					'jumlah'       => $this->put('jumlah'),
					'foto'			=> $actual_path,
					'keterangan'    => $this->put('keterangan'),
					'tgl_masuk'       => $this->put('tgl_masuk'),
					'tgl_keluar'       => $this->put('tgl_keluar'),
					'tgl_kadaluarsa'    => $this->put('tgl_kadaluarsa')
				);
				$this->db->where('id', $this->put('id_laporan'));
				$update = $this->db->update('tb_lapor_fl', $data);
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
	// 		echo "success";
	// 	} else {
	// 		echo "failed";
	// 	}
	// }
}