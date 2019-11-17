<?php

require APPPATH . '/libraries/REST_Controller.php';

class Absent extends REST_Controller {

	function __construct($config = 'rest') {
		parent::__construct($config);
	}
	function index_get() {
		if($this->get('id_user')!=NULL){
            $tagl = date('Y-m-d');
			// $q = "SELECT a.id AS id_laporan,a.tgl_laporan,b.nama_outlet,a.kode_produk,a.kondisi,a.jumlah,a.foto,a.keterangan,a.tgl_masuk,a.tgl_kadaluarsa FROM tb_lapor_fl a LEFT JOIN tb_outlet b ON a.id_outlet=b.id_outlet WHERE a.id='".$this->get('id_laporan')."'";
			$q = "SELECT a.*,b.absen_today,b.status_absen FROM tb_absensi a LEFT JOIN tb_user b ON a.nik_user=b.nik WHERE b.id_user='".$this->get('id_user')."' AND a.tgl_absensi LIKE '%".$tagl."%'";
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