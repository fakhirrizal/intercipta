<?php

require APPPATH . '/libraries/REST_Controller.php';

class Fl_in_outlet extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
    }
    function index_get() {
		if($this->get('id_region')!=NULL){
			$q = "SELECT a.id_user AS id,a.nama AS nama_fl,(SELECT COUNT(b.id_fl) FROM tb_fl_to_outlet b WHERE b.id_fl=a.id_user) AS jml FROM tb_user a WHERE a.level='fl' AND a.id_region='".$this->get('id_region')."'";
			$get_data = $this->db->query($q)->result();
			if($get_data==NULL){
                echo "no_data";
			}else{
				$this->response($get_data, 200);
			}
		}elseif($this->get('id_fl')!=NULL){
			$q = "SELECT a.id,c.nama AS nama_fl,b.nama_outlet,d.nama_shift AS shift FROM tb_fl_to_outlet a LEFT JOIN tb_outlet b ON a.id_outlet=b.id_outlet LEFT JOIN tb_user c ON a.id_fl=c.id_user LEFT JOIN tb_shift d ON a.id_shift=d.id WHERE a.id_fl='".$this->get('id_fl')."' AND b.deleted='0' AND d.deleted='0'";
			$get_data = $this->db->query($q)->result();
			if($get_data==NULL){
                echo "no_data";
			}else{
				$this->response($get_data, 200);
			}
		}else{
			$q = "SELECT a.id,c.nama AS nama_fl,b.nama_outlet,d.nama_shift AS shift FROM tb_fl_to_outlet a LEFT JOIN tb_outlet b ON a.id_outlet=b.id_outlet LEFT JOIN tb_user c ON a.id_fl=c.id_user LEFT JOIN tb_shift d ON a.id_shift=d.id WHERE b.deleted='0' AND d.deleted='0'";
			$get_data = $this->db->query($q)->result();
			if($get_data==NULL){
                echo "no_data";
			}else{
				$this->response($get_data, 200);
			}
		}
	}
	function index_post() {
		$q = "INSERT INTO tb_fl_to_outlet(id_outlet, id_fl, id_shift) VALUES('".$this->post('id_outlet')."','".$this->post('id_fl')."','".$this->post('id_shift')."')";
		$insert_to_table = $this->db->query($q);
		if($insert_to_table=='1'){
			echo "success";
		}else{
			echo "failed";
		}
	}
	// function index_put() {
	// 	$sekarang = date("Ymd_His");

	// 	$file_name = $sekarang.".jpg";
	// 	$actual_path = base_url()."assets/fl_report/".$file_name;
	// 	$image = $this->put('image');
	// 	if($this->put('image')==NULL){
	// 		$data = array(
	// 				'tgl_laporan'       => $this->put('tgl_laporan'),
	// 				'id_outlet'       => $this->put('id_outlet'),
	// 				'nik_fl'       => $this->put('id_user'),
	// 				'kode_produk'    => $this->put('kode_produk'),
	// 				'kondisi'       => $this->put('kondisi'),
	// 				'jumlah'       => $this->put('jumlah'),
	// 				'keterangan'    => $this->put('keterangan'),
	// 				'tgl_masuk'       => $this->put('tgl_masuk'),
	// 				'tgl_kadaluarsa'    => $this->put('tgl_kadaluarsa')
	// 		);
	// 	$this->db->where('id', $this->put('id_laporan'));
	// 	$update = $this->db->update('tb_lapor_fl', $data);
	// 	if ($update) {
	// 		echo "success";
	// 	} else {
	// 		echo "failed";
	// 	}
	// 	}else{
	// 		if (file_put_contents($actual_path, base64_decode($image)) != null) {
	// 			$data = array(
	// 				'tgl_laporan'       => $this->put('tgl_laporan'),
	// 				'id_outlet'       => $this->put('id_outlet'),
	// 				'nik_fl'       => $this->put('id_user'),
	// 				'kode_produk'    => $this->put('kode_produk'),
	// 				'kondisi'       => $this->put('kondisi'),
	// 				'jumlah'       => $this->put('jumlah'),
	// 				'foto'			=> $actual_path,
	// 				'keterangan'    => $this->put('keterangan'),
	// 				'tgl_masuk'       => $this->put('tgl_masuk'),
	// 				'tgl_kadaluarsa'    => $this->put('tgl_kadaluarsa')
	// 			);
	// 			$this->db->where('id', $this->put('id_laporan'));
	// 			$update = $this->db->update('tb_lapor_fl', $data);
	// 			if ($update) {
	// 				echo "success";
	// 			} else {
	// 				echo "failed";
	// 			}
	// 		}else{
	// 			echo "no_data";
	// 		}
	// 	}
	// }
	// function index_delete() {
	// 	$post = file_get_contents('php://input');
	// 	$json = json_decode($post, true);
	// 	$this->db->where('id', $json['id_laporan']);
	// 	$update = $this->db->delete('tb_lapor_fl', $data);
	// 	if ($update) {
	// 		echo "success";
	// 	} else {
    //         echo "failed";
	// 	}
    // }
}