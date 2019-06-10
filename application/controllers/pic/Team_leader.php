<?php

require APPPATH . '/libraries/REST_Controller.php';

class Team_leader extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
    }
    function index_get() {			
    	$q = "SELECT a.id_user,a.nama, (SELECT COUNT(b.id) FROM tb_project_region b WHERE b.id_tl=a.id_user) AS status FROM tb_user a WHERE a.id_region='".$this->get('id_region')."' AND a.level='tl'";
		$get_data = $this->db->query($q)->result();
		$data = array();
		foreach ($get_data as $key => $value) {
			if($value->status=='0'){
				$isi['id_user'] = $value->id_user;
				$isi['nama'] = $value->nama;
				$data[] = $isi;
			}else{
				echo '';
			}
		}
		if($data==NULL){
			echo 'no_data';
		}else{
			$this->response($data, 200);
		}
	}
}