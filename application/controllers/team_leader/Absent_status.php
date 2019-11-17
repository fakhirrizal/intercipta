<?php

require APPPATH . '/libraries/REST_Controller.php';

class Absent_status extends REST_Controller {

	function __construct($config = 'rest') {
		parent::__construct($config);
	}
	function index_get() {
		if($this->get('id_user')!=NULL){
			// $q = "SELECT a.id AS id_laporan,a.tgl_laporan,b.nama_outlet,a.kode_produk,a.kondisi,a.jumlah,a.foto,a.keterangan,a.tgl_masuk,a.tgl_kadaluarsa FROM tb_lapor_fl a LEFT JOIN tb_outlet b ON a.id_outlet=b.id_outlet WHERE a.id='".$this->get('id_laporan')."'";
			$q = "SELECT a.status_absen,a.absen_today,a.keterangan_absen FROM tb_user a WHERE a.id_user='".$this->get('id_user')."'";
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
}