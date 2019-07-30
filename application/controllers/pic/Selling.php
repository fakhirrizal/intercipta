<?php

require APPPATH . '/libraries/REST_Controller.php';

class Selling extends REST_Controller {

	function __construct($config = 'rest') {
		parent::__construct($config);
	}
	function index_get() {
		if($this->get('kode_produk')!=NULL){
			$q = "SELECT a.kode_produk,a.nama_produk,a.foto_produk,a.deskripsi FROM tb_produk a WHERE a.kode_produk='".$this->get('kode_produk')."'";
            $get_data['data_utama'] = $this->db->query($q)->result();
            $q2 = "SELECT a.tgl_penjualan,b.nama AS nama_fl,a.stok_awal,a.stok_akhir,a.stok_add,a.keterangan FROM tb_penjualan a LEFT JOIN tb_user b ON a.nik_fl=b.nik WHERE a.kode_produk='".$this->get('kode_produk')."'";
			$get_data['data_detail'] = $this->db->query($q2)->result();
			if($get_data==NULL){
				// $this->response(array('status' => 'Result not found', 502));
				echo "no_data";
			}else{
				$this->response($get_data, 200);
			}
        }else{
			echo "no_data";
		}
	}
}