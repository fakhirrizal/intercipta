<?php

require APPPATH . '/libraries/REST_Controller.php';

class Report_penjualan extends REST_Controller {

	function __construct($config = 'rest') {
		parent::__construct($config);
	}
	function index_get() {
		if($this->get('id_laporan')!=NULL){
			$q = "SELECT a.id_report_penjualan_fl AS id_laporan,a.id_user,u.nama,z.nama_produk,a.kode_produk,a.stok_awal,a.jumlah_tambahan,a.stok_akhir,a.tanggal_report FROM tb_report_penjualan_fl a LEFT JOIN tb_user u ON a.id_user=u.id_user LEFT JOIN tb_produk z ON a.kode_produk=z.kode_produk WHERE a.id_report_penjualan_fl='".$this->get('id_laporan')."'";
			$get_data = $this->db->query($q)->result();
			if($get_data==NULL){
				echo "no_data";
			}else{
				$this->response($get_data, 200);
			}
		}elseif($this->get('id_user')!=NULL){
			$q = "SELECT a.id_report_penjualan_fl AS id_laporan,a.id_user,u.nama,z.nama_produk,a.kode_produk,a.stok_awal,a.jumlah_tambahan,a.stok_akhir,a.tanggal_report FROM tb_report_penjualan_fl a LEFT JOIN tb_user u ON a.id_user=u.id_user LEFT JOIN tb_produk z ON a.kode_produk=z.kode_produk WHERE a.id_user='".$this->get('id_user')."'";
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
        $tanggal = date("Y-m-d H:i:s");
        $q = "INSERT INTO tb_report_penjualan_fl(id_report_penjualan_fl, id_user, kode_produk, stok_awal, jumlah_tambahan, stok_akhir, tanggal_report) VALUES('','".$this->post('id_user')."','".$this->post('kode_produk')."','".$this->post('stok_awal')."','".$this->post('jumlah_tambahan')."','".$this->post('stok_akhir')."','".$this->post('tanggal_report')."')";
        $insert_to_table = $this->db->query($q);
        if($insert_to_table=='1'){
            echo "success";
        }else{
            echo "failed";
        }
	}
	function index_put() {
		$data = array(
            'id_user'       => $this->put('id_user'),
            'kode_produk'       => $this->put('kode_produk'),
            'stok_awal'       => $this->put('stok_awal'),
            'jumlah_tambahan'    => $this->put('jumlah_tambahan'),
            'stok_akhir'       => $this->put('stok_akhir'),
            'tanggal_report'       => $this->put('tanggal_report')
        );
        $this->db->where('id_report_penjualan_fl', $this->put('id_laporan'));
        $update = $this->db->update('tb_report_penjualan_fl', $data);
        if ($update) {
            echo "success";
        } else {
            echo "failed";
        }
	}
}