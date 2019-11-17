<?php

require APPPATH . '/libraries/REST_Controller.php';

class Check_in extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
    }
    function index_post() {
		/*
		post nik
		post tanggal_absensi
		post image
		post lat
		post long
		post nama
		*/
        $sekarang = date("Ymd_His");
		$q = "SELECT s.jam_masuk FROM tb_shift s JOIN tb_user u ON s.id = u.id_shift WHERE u.nik = '".$this->post('nik')."' AND s.deleted='0'";
		$cekwaktu = $this->db->query($q)->result();
		$jam_masuk = date_format(date_create($this->post('tgl_absensi')), "H:i:s");
		$jam_masuk_shift = "";
		foreach ($cekwaktu as $key => $value) {
			$jam_masuk_shift = $value->jam_masuk;
		}
		//compare absent time with working hours
		$telat = '';
        if (strtotime($jam_masuk) > (strtotime($jam_masuk_shift) + 600)) {
            $telat = "ya";
        } else {
            $telat = "tidak";
		}
		//upload absent photo to server
        $file_name = $this->post('nama').$sekarang.".jpg";
        $upload_folder_path = "app/foto-absen";
        $actual_path = "/home/aplikasi/public_html/intercipta/".$upload_folder_path."/".$file_name;
        $image = $this->post('image');
		if($image==NULL){
			$this->response(array('status' => 'File not found to be upload', 502));
		}else{
			if (file_put_contents($actual_path, base64_decode($image)) != null) {
			    $q5 = "SELECT a.* FROM tb_absensi a WHERE a.tgl_absensi = '".$this->post('tgl_absensi')."' AND a.nik_user = '".$this->post('nik')."'";
				$cek_absen = $this->db->query($q5)->result();
				if($cek_absen==NULL){
				    $q6 = "SELECT b.jam_masuk FROM tb_user a LEFT JOIN tb_shift b ON a.id_shift=b.id WHERE a.nik = '".$this->post('nik')."' AND b.deleted='0'";
				    $cek_shift = $this->db->query($q6)->result();
				    if($cek_shift==NULL){
				        echo 'Shift tidak ditemukan';
				    }else{
				        $jam_masuk_shift = '';
				        foreach($cek_shift as $key => $jms){
				            $jam_masuk_shift = $jms->jam_masuk;
				        }
				        $awal  = strtotime($jam_masuk);
                        $akhir = strtotime($jam_masuk_shift);
                        $diff  = $akhir - $awal;
                        
                        if($diff<=3600){
                            $q2 = "INSERT INTO tb_absensi(tgl_absensi, nik_user, jam_masuk, foto, lat, lng, telat, keterangan_absen) VALUES('".$this->post('tgl_absensi')."', '".$this->post('nik')."', '".$jam_masuk."', '".$file_name."', '".$this->post('lat')."', '".$this->post('lng')."', '".$telat."', '".$this->post('keterangan_absen')."')";
            				$insert_to_table = $this->db->query($q2);
            				if($insert_to_table=='1'){
            					$q3 = "UPDATE tb_user SET status_absen = 'masuk', absen_today = 'ya', keterangan_absen = '".$this->post('keterangan_absen')."' WHERE nik = '".$this->post('nik')."'";
            					$update_absent = $this->db->query($q3);
            					if($update_absent=='1'){
            						$q4 = "SELECT id FROM tb_absensi WHERE tgl_absensi = '".$this->post('tgl_absensi')."'";
            						$get_id = $this->db->query($q4)->result();
            						if($get_id==NULL){
            							// $this->response(array('status' => 'Result not found', 502));
            							$this->response(array('status' => '0', 502));
            						}else{
            							$this->response($get_id, 200);
            						}
            					}else{
            						// $this->response(array('status' => 'Fail change status', 502));
            						$this->response(array('status' => '0', 502));
            					}
            				}else{
            					// $this->response(array('status' => 'Fail absent', 502));
            					$this->response(array('status' => '0', 502));
            				}           
                        }else{
                            echo "Anda tidak bisa absen, belum masuk jam shift";
                        }
				    }
				}else{
				    echo "Anda sudah absen hari ini";
				}
			}else{
				// $this->response(array('status' => 'Upload failed', 502));
				$this->response(array('status' => '0', 502));
			}
		}
    }
}