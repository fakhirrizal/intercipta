<?php

require APPPATH . '/libraries/REST_Controller.php';

class Absent_done extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
    }
    function index_post() {
		/*
		post id_absen
		post id_user
		post tanggal_absen_done
		*/
		$jam_keluar = date_format(date_create($this->post('tanggal_absen_done')), "H:i:s");
		$q = "UPDATE tb_absensi SET jam_keluar = '".$jam_keluar."' WHERE id = '".$this->post('id_absen')."'";
		$update_absent = $this->db->query($q);
		if($update_absent=='1'){
			$q2 = "UPDATE tb_user SET status_absen = 'keluar' WHERE id_user = '".$this->post('id_user')."'";
			$update_status = $this->db->query($q2);
			if($update_status=='1'){
				$q3 = "SELECT status_absen FROM tb_user WHERE id_user = '".$this->post('id_user')."'";
				$get_status = $this->db->query($q3)->result();
				if($get_status==NULL){
					// $this->response(array('status' => 'Result not found', 502));
					// $this->response(array('status' => '0', 502));
					echo'gagal';
				}else{
					// $this->response($get_status, 200);
					echo 'keluar';
				}
			}else{
				// $this->response(array('status' => 'Fail change status', 502));
				// $this->response(array('status' => '0', 502));
				echo'gagal';
			}
		}else{
			// $this->response(array('status' => 'Fail absent', 502));
			// $this->response(array('status' => '0', 502));
			echo'gagal';
		}
    }
}