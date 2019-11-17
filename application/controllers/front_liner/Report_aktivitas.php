<?php

require APPPATH . '/libraries/REST_Controller.php';

class Report_aktivitas extends REST_Controller {

	function __construct($config = 'rest') {
		parent::__construct($config);
	}
	function index_get() {
		if($this->get('id_user')!=NULL){
			$q = "SELECT a.id_report_aktivitas_fl AS id_laporan,a.id_user,b.nama,a.foto_outlet,a.keterangan,a.tgl FROM tb_report_aktivitas_fl a LEFT JOIN tb_user b ON a.id_user=b.id_user WHERE a.id_user='".$this->get('id_user')."' ORDER BY a.tgl DESC";
			$get_data = $this->db->query($q)->result();
			if($get_data==NULL){
				echo "no_data";
			}else{
				$this->response($get_data, 200);
			}
		}elseif($this->get('id_laporan')!=NULL){
			$q = "SELECT a.id_report_aktivitas_fl AS id_laporan,b.nama,a.id_user,a.foto_outlet,a.keterangan,a.tgl FROM tb_report_aktivitas_fl a LEFT JOIN tb_user b ON a.id_user=b.id_user WHERE a.id_report_aktivitas_fl='".$this->get('id_laporan')."' ORDER BY a.tgl DESC";
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
		$actual_path = "/home/aplikasi/public_html/intercipta/assets/fl_report/".$file_name;
		$actual_path2 = base_url()."assets/fl_report/".$file_name;
		$image = $this->post('foto_outlet');
		if (file_put_contents($actual_path, base64_decode($image)) != null) {
			$tanggal_now = date("Y-m-d H:i:s");
			$q = "INSERT INTO tb_report_aktivitas_fl(id_user,foto_outlet,keterangan,tgl) VALUES('".$this->post('id_user')."','".$actual_path2."','".$this->post('keterangan')."','".$tanggal_now."')";
			$insert_to_table = $this->db->query($q);
			if($insert_to_table=='1'){
				echo "success";
			}else{
				echo "failed";
			}
		}else{
			echo "failed";
		}
	}
	function index_put() {
		$get_report = $this->db->query("SELECT a.* FROM tb_report_aktivitas_fl a WHERE a.id_report_aktivitas_fl=".$this->put('id_laporan'))->row();
		if($get_report==NULL){
			echo "failed";
		}else{
			if(substr($get_report->tgl,0,10)==date('Y-m-d')){
				$sekarang = date("Ymd_His");
				$file_name = $sekarang.".jpg";
				$actual_path = "/home/aplikasi/public_html/intercipta/assets/fl_report/".$file_name;
				$actual_path2 = base_url()."assets/fl_report/".$file_name;
				$image = $this->put('foto_outlet');
				if($this->put('foto_outlet')==NULL){
					$data = array(
							'id_user'       => $this->put('id_user'),
							'keterangan'       => $this->put('keterangan')
							// 'tgl'       => $this->put('tgl')
						);
					$this->db->where('id_report_aktivitas_fl', $this->put('id_laporan'));
					$update = $this->db->update('tb_report_aktivitas_fl', $data);
					if ($update) {
						echo "success";
					} else {
						echo "failed";
					}
				}else{
					if (file_put_contents($actual_path, base64_decode($image)) != null) {
						$data = array(
							'id_user'       => $this->put('id_user'),
							'foto_outlet'			=> $actual_path2,
							'keterangan'    => $this->put('keterangan')
							// 'tgl'       => $this->put('tgl')
						);
						$this->db->where('id_report_aktivitas_fl', $this->put('id_laporan'));
						$update = $this->db->update('tb_report_aktivitas_fl', $data);
						if ($update) {
							echo "success";
						} else {
							echo "failed";
						}
					}else{
						echo "no_data";
					}
				}
			}else{
				echo "failed";
			}
			
		}
	}
}