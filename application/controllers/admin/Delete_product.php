<?php

require APPPATH . '/libraries/REST_Controller.php';

class Delete_product extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
	}
	function index_get() {
		if($this->get('id_produk')!=NULL){
			$data = array(
                'deleted'       => '1'
            );
            $this->db->where('id_produk', $this->get('id_produk'));
            $update = $this->db->update('tb_produk', $data);
            if ($update) {
                echo "success";
            } else {
                echo "failed";
            }
		}else{
			echo "failed";
        }
	}
}