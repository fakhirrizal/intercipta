<?php

require APPPATH . '/libraries/REST_Controller.php';

class Project extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
	}
	function index_get() {
		if($this->get('kode_project')!=NULL){
			$q = "SELECT a.id_project,b.id_user AS id_client,b.nama AS client,a.kode_project,a.nama_project,(SELECT COUNT(c.id) FROM tb_project_region c WHERE c.kode_project=a.kode_project) AS jumlah_region,(SELECT COUNT(c.id) FROM tb_project_region c WHERE c.kode_project=a.kode_project AND c.id_tl!='') AS region_complete FROM tb_project a LEFT JOIN tb_user b ON a.nik_client=b.nik WHERE a.nik_pic='".$this->get('nik_pic')."' AND a.kode_project='".$this->get('kode_project')."' AND a.status='1' AND a.deleted='0'";
            $get_data['data_utama'] = $this->db->query($q)->result();
            $q2 = "SELECT a.id AS id_project_region,b.nama_region,c.nama AS nama_tl,(SELECT COUNT(d.id_outlet) FROM tb_project_region_to_outlet d WHERE d.id_project_region=a.id) AS jumlah_outlet,b.id AS id_region FROM tb_project_region a LEFT JOIN tb_region b ON a.id_region=b.id LEFT JOIN tb_user c ON a.id_tl=c.id_user WHERE a.kode_project='".$this->get('kode_project')."'";
			$get_data['data_detail'] = $this->db->query($q2)->result();
			if($get_data==NULL){
				// $this->response(array('status' => 'Result not found', 502));
				echo "no_data";
			}else{
				$this->response($get_data, 200);
			}
        }else{
			$q = "SELECT a.id_project,b.id_user AS id_client,b.nama AS client,a.kode_project,a.nama_project,(SELECT COUNT(c.id) FROM tb_project_region c WHERE c.kode_project=a.kode_project) AS jumlah_region,(SELECT COUNT(c.id) FROM tb_project_region c WHERE c.kode_project=a.kode_project AND c.id_tl!='') AS region_complete FROM tb_project a LEFT JOIN tb_user b ON a.nik_client=b.nik WHERE a.nik_pic='".$this->get('nik_pic')."' AND a.status='1' AND a.deleted='0'";
			$get_data = $this->db->query($q)->result();
			if($get_data==NULL){
				// $this->response(array('status' => 'Result not found', 502));
				echo "no_data";
			}else{
				$this->response($get_data, 200);
			}
		}
	}
}

