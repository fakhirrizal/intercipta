<?php

require APPPATH . '/libraries/REST_Controller.php';

class Report_tl extends REST_Controller {

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
	}
	function index_put() {
	}
	function index_delete() {
    }
}