<?php

require APPPATH . '/libraries/REST_Controller.php';

class Delete_report_competitor extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
    }
    function index_get() {
		if($this->get('id_report_competitor')!=NULL){
			if($this->db->delete('tb_report_competitor', array('id_report_competitor'=>$this->get('id_report_competitor')))){
                echo "success";
			}else{
				echo 'failed';
			}
		}else{
			echo 'error';
		}
	}
}