<?php

require APPPATH . '/libraries/REST_Controller.php';

class Report extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
    }
    function index_get() {
		if($this->get('id_laporan')==NULL){
			$q = "SELECT a.id AS id_laporan,a.tgl_laporan,a.tipe_laporan,a.foto_kondisi,a.keterangan,a.lat,a.lng FROM tb_lapor_tl a WHERE a.id='".$this->get('id_laporan')."' AND a.nik_user='".$this->get('id_tl')."'";
			$get_data = $this->db->query($q)->result();
			if($get_data==NULL){
                echo "no_data";
			}else{
				$this->response($get_data, 200);
			}
		}else{
			$q = "SELECT a.id AS id_laporan,a.tgl_laporan,a.tipe_laporan,a.foto_kondisi,a.keterangan,a.lat,a.lng FROM tb_lapor_tl a WHERE a.nik_user='".$this->get('id_tl')."'";
			$get_data = $this->db->query($q)->result();
			if($get_data==NULL){
                echo "no_data";
			}else{
				$this->response($get_data, 200);
			}
		}
	}
	function index_post() {
		$sekarang = date("Ymd_His");

		// define('UPLOAD_DIR', '/home/aplikasi/public_html/intercipta/assets/tl_report/');
		// $img = $this->post('foto_kondisi');
		// $img = str_replace('data:image/png;base64,', '', $img);
		// $img = str_replace(' ', '+', $img);
		// $data = base64_decode($img);
		// $file = UPLOAD_DIR . uniqid() . '.jpg';
		// $success = file_put_contents($file, $data);
		// print $success ? $file : 'Unable to save the file.';

		$file_name = $sekarang.".jpg";
		$actual_path2 = "/home/aplikasi/public_html/intercipta/assets/tl_report/".$file_name;
		// $actual_path2 = dirname($_SERVER["SCRIPT_FILENAME"])."/assets/Team Leader's Report/";
		$actual_path = base_url()."/assets/tl_report/".$file_name;
		$image = $this->post('foto_kondisi');
		if (file_put_contents($actual_path2, base64_decode($image)) != null) {
			$q = "INSERT INTO tb_lapor_tl(tgl_laporan, nik_user, tipe_laporan, foto_kondisi, keterangan, lat, lng) VALUES('".$this->post('tgl_laporan')."','".$this->post('id_user')."','".$this->post('tipe_laporan')."','".$actual_path."','".$this->post('keterangan')."','".$this->post('lat')."','".$this->post('lng')."')";
			$insert_to_table = $this->db->query($q);
			if($insert_to_table=='1'){
	            echo "success";
			}else{
	            echo "failed";
			}
		}else{
			echo "no_data";
		}


		// $image = base64_decode($this->post("foto_kondisi"));
		// $image_name = md5(uniqid(rand(), true));
		// $filename = $image_name . '.' . 'jpg';
		// $path = "/home/aplikasi/public_html/intercipta/assets/tl_report/"
		// file_put_contents($path . $filename, $image);
	}
	function index_put() {
		$sekarang = date("Ymd_His");

		//upload photo to server
		$file_name = $sekarang.".jpg";
		$actual_path = base_url()."assets/tl_report/".$file_name;
		$image = $this->put('image');
		if($this->put('image')==NULL){
			$data = array(
					'tgl_laporan'       => $this->put('tgl_laporan'),
					'nik_user'       => $this->put('id_user'),
                    'tipe_laporan'    => $this->put('tipe_laporan'),
                    'keterangan'       => $this->put('keterangan'),
					'lat'       => $this->put('lat'),
                    'lng'    => $this->put('lng')
                );
	        $this->db->where('id', $this->put('id_laporan'));
	        $update = $this->db->update('tb_lapor_tl', $data);
	        if ($update) {	            
	        	echo "success";
	        } else {
				echo "failed";
	        }
		}else{
			if (file_put_contents($actual_path, base64_decode($image)) != null) {
				$data = array(
					'tgl_laporan'       => $this->put('tgl_laporan'),
					'nik_user'       => $this->put('id_user'),
                    'tipe_laporan'    => $this->put('tipe_laporan'),
                    'foto_kondisi'    => $actual_path,
                    'keterangan'       => $this->put('keterangan'),
					'lat'       => $this->put('lat'),
                    'lng'    => $this->put('lng')
                );
		        $this->db->where('id', $this->put('id_laporan'));
		        $update = $this->db->update('tb_lapor_tl', $data);
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
	function index_delete() {
		$post = file_get_contents('php://input');
		$json = json_decode($post, true);
		$this->db->where('id', $json['id_laporan']);
		$update = $this->db->delete('tb_lapor_tl', $data);
		if ($update) {
			// $this->response(array('status' => 'Update is successful', 200));
//			$this->response(array('status' => '1', 200));
			echo "success";
		} else {
			// $this->response(array('status' => 'Failed, please try again', 502));
//			$this->response(array('status' => '0', 502));
            echo "failed";
		}
    }
}