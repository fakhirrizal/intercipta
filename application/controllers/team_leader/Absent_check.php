<?php

require APPPATH . '/libraries/REST_Controller.php';

class Absent_check extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
    }
    function index_get() {
		$nik = '';
		$q0 = "SELECT a.* FROM tb_user a WHERE a.id_user='".$this->get('id_tl')."'";
		foreach ($this->db->query($q0)->result() as $key => $value) {
			$nik = $value->nik;
		}
		$q = "SELECT c.nama_region,a.nama_outlet,(SELECT b.id FROM tb_absensi b WHERE b.tgl_absensi LIKE '%".$this->get('tanggal')."%' AND b.nik_user='".$nik."' AND b.id_outlet=a.id_outlet) AS id_absen FROM tb_project_region d LEFT JOIN tb_region c ON d.id_region=c.id LEFT JOIN tb_outlet a ON d.id=a.id_project_region WHERE d.id_tl='".$this->get('id_tl')."' AND c.deleted='0' AND a.deleted='0'";
		$get_data = $this->db->query($q)->result();
		if($get_data==NULL){
			echo "no_data";
		}else{
			$this->response($get_data, 200);
		}
	}
}