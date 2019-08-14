<?php

require APPPATH . '/libraries/REST_Controller.php';

class Report_fl extends REST_Controller {

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
		}elseif($this->get('id_tl')!=NULL){
			// $q = "SELECT a.id AS id_laporan,a.tgl_laporan,b.nama_outlet,a.kode_produk,a.kondisi,a.jumlah,a.foto,a.keterangan,a.tgl_masuk,a.tgl_kadaluarsa FROM tb_lapor_fl a LEFT JOIN tb_outlet b ON a.id_outlet=b.id_outlet WHERE a.nik_fl='".$this->get('id_fl')."'";
			$q2 = "SELECT a.id AS id_project_region FROM tb_project_region a LEFT JOIN tb_region b ON a.id_region=b.id LEFT JOIN tb_user c ON a.id_tl=c.id_user WHERE a.id_tl='".$this->get('id_tl')."'";
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
	}
	function index_put() {
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