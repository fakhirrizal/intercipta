<?php

require APPPATH . '/libraries/REST_Controller.php';

class Selling_this_month extends REST_Controller {

	function __construct($config = 'rest') {
		parent::__construct($config);
	}
	function index_get() {
		$q2 = "SELECT a.tgl_penjualan,b.nama AS nama_fl,c.nama_produk,a.stok_awal,a.stok_akhir,a.stok_add,a.keterangan FROM tb_penjualan a LEFT JOIN tb_user b ON a.nik_fl=b.nik LEFT JOIN tb_produk c ON a.kode_produk=c.kode_produk WHERE a.tgl_penjualan LIKE '%".date('Y-m-')."%'";
		$get_data['data_laporan'] = $this->db->query($q2)->result();
		if($get_data==NULL){
			// $this->response(array('status' => 'Result not found', 502));
			echo "no_data";
		}else{
			$this->response($get_data, 200);
		}
	}
}