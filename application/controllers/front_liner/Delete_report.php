<?php

require APPPATH . '/libraries/REST_Controller.php';

class Delete_report extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
    }
    function index_get() {
		if($this->get('id_laporan')!=NULL){
			if($this->db->delete('tb_lapor_fl', array('id'=>$this->get('id_laporan')))){
                echo "success";
			}else{
				echo 'failed';
			}
		}else{
			echo 'error';
		}
	}
}