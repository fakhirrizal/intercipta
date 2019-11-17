<?php

require APPPATH . '/libraries/REST_Controller.php';

class Fl_to_outlet extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
	}
	function index_get() {
		if($this->get('id_region')!=NULL){
		// 	$q = "SELECT a.id_user AS id,a.nama AS nama_fl,(SELECT COUNT(b.id_fl) FROM tb_fl_to_outlet b WHERE b.id_fl=a.id_user GROUP BY b.id_fl) AS jml FROM tb_user a WHERE a.level='fl' AND a.id_region='".$this->get('id_region')."'";
		// 	$get_data = $this->db->query($q)->result();
		// 	$data = array();
		// 	foreach ($get_data as $key => $value) {
		// 		if($value->jml=='0'){
		// 			$isi['id'] = $value->id;
		// 			$isi['nama_fl'] = $value->nama_fl;
		// 			$data[] = $isi;
		// 		}else{
		// 			echo '';
		// 		}
		// 	}
		// 	if($data==NULL){
		// 		$r = array();
		// 		$this->response($r, 200);
		// 	}else{
		// 		$this->response($data, 200);
		// 	}
		// }
			$q = "SELECT a.id_user AS id,a.nama AS nama_fl FROM tb_user a WHERE a.level='fl' AND a.id_region='".$this->get('id_region')."'";
			$get_data = $this->db->query($q)->result();
			if($get_data==NULL){
				$r = array();
				$this->response($r, 200);
			}else{
				$this->response($get_data, 200);
			}
		}
		// elseif($this->get('id_fl')!=NULL){
		// 	$q = "SELECT a.id,c.nama AS nama_fl,b.nama_outlet,d.nama_shift AS shift FROM tb_fl_to_outlet a LEFT JOIN tb_outlet b ON a.id_outlet=b.id_outlet LEFT JOIN tb_project_region x ON b.id_project_region=x.id LEFT JOIN tb_project y ON x.kode_project=y.kode_project LEFT JOIN tb_region z ON x.id_region=z.id LEFT JOIN tb_user c ON a.id_fl=c.id_user LEFT JOIN tb_shift d ON a.id_shift=d.id WHERE a.id_fl='".$this->get('id_fl')."' AND b.deleted='0' AND d.deleted='0' AND z.deleted='0' AND y.status='1' AND y.deleted='0'";
		// 	$get_data = $this->db->query($q)->result();
		// 	if($get_data==NULL){
        //         echo "no_data";
		// 	}else{
		// 		$this->response($get_data, 200);
		// 	}
		// }
		elseif($this->get('id_outlet')!=NULL){
			// $q = "SELECT a.id,c.nama,d.nama_shift, d.jam_masuk, d.jam_keluar FROM tb_fl_to_outlet a LEFT JOIN tb_outlet b ON a.id_outlet=b.id_outlet LEFT JOIN tb_project_region x ON b.id_project_region=x.id LEFT JOIN tb_project y ON x.kode_project=y.kode_project LEFT JOIN tb_region z ON x.id_region=z.id LEFT JOIN tb_user c ON a.id_fl=c.id_user LEFT JOIN tb_shift d ON a.id_shift=d.id WHERE a.id_outlet='".$this->get('id_outlet')."' AND b.deleted='0' AND d.deleted='0' AND z.deleted='0' AND y.status='1' AND y.deleted='0'";
			$q = "SELECT a.id,c.nama,d.nama_shift,d.jam_masuk,d.jam_keluar FROM tb_fl_to_outlet a LEFT JOIN tb_user c ON a.id_fl=c.id_user LEFT JOIN tb_shift d ON a.id_shift=d.id LEFT JOIN tb_project_region_to_outlet x ON a.id_project_region_to_outlet=x.id_project_region_to_outlet LEFT JOIN tb_outlet b ON x.id_outlet=b.id_outlet WHERE d.deleted='0' AND x.id_outlet='".$this->get('id_outlet')."' AND b.deleted='0'";
			$get_data = $this->db->query($q)->result();
			if($get_data==NULL){
                echo "no_data";
			}else{
				$this->response($get_data, 200);
			}
		}else{
			// $q = "SELECT a.id,c.nama AS nama_fl,b.nama_outlet,d.nama_shift AS shift FROM tb_fl_to_outlet a LEFT JOIN tb_outlet b ON a.id_outlet=b.id_outlet LEFT JOIN tb_project_region x ON b.id_project_region=x.id LEFT JOIN tb_project y ON x.kode_project=y.kode_project LEFT JOIN tb_region z ON x.id_region=z.id LEFT JOIN tb_user c ON a.id_fl=c.id_user LEFT JOIN tb_shift d ON a.id_shift=d.id WHERE b.deleted='0' AND d.deleted='0' AND z.deleted='0' AND y.status='1' AND y.deleted='0'";
			$q = "SELECT a.id,c.nama AS nama_fl,b.nama_outlet,d.nama_shift FROM tb_fl_to_outlet a LEFT JOIN tb_user c ON a.id_fl=c.id_user LEFT JOIN tb_shift d ON a.id_shift=d.id LEFT JOIN tb_project_region_to_outlet x ON a.id_project_region_to_outlet=x.id_project_region_to_outlet LEFT JOIN tb_outlet b ON x.id_outlet=b.id_outlet WHERE d.deleted='0' AND b.deleted='0'";
			$get_data = $this->db->query($q)->result();
			if($get_data==NULL){
                echo "no_data";
			}else{
				$this->response($get_data, 200);
			}
		}
	}
    function index_post() {
		/*
		post id_region
		post id_shift_pagi
		post id_shift_sore
		post nama
		*/
		$getid = $this->db->query("SELECT a.* FROM tb_project_region_to_outlet a WHERE a.id_project_region='".$this->post('id_project_region')."' AND a.id_outlet='".$this->post('id_outlet')."'")->row();
		if($getid==NULL){
			echo 'failed';
		}else{
			$check = $this->db->query("SELECT a.* FROM tb_fl_to_outlet a WHERE a.id_fl = '".$this->post('id_user')."'")->result();
			if($check==NULL){
				$q = "INSERT INTO tb_fl_to_outlet(id_project_region_to_outlet, id_fl, id_shift) VALUES('".$getid->id_project_region_to_outlet."','".$this->post('id_user')."','".$this->post('id_shift')."')";
				$insert_to_table = $this->db->query($q);
				$data_update_outlet = array(
					'id_outlet'       => $this->post('id_outlet')
				);
				$this->db->where('id_user', $this->post('id_user'));
				$update_outlet = $this->db->update('tb_user', $data_update_outlet);
				if($insert_to_table=='1'){
					// $this->response(array('status' => 'Success', 200));
					// $this->response(array('status' => '1', 200));
					echo "success";
				}else{
					// $this->response(array('status' => 'Failed, please try again!', 502));
					// $this->response(array('status' => '0', 502));
					echo "failed";
				}
			}else{
				echo'existed';
			}
			
		}
	}
	function index_put() {
		$getid = $this->db->query("SELECT a.* FROM tb_project_region_to_outlet a WHERE a.id_project_region='".$this->post('id_project_region')."' AND a.id_outlet='".$this->post('id_outlet')."'")->row();
		if($getid==NULL){
			echo 'failed';
		}else{
			$data = array(
						'id_project_region_to_outlet'       => $this->put('id_project_region_to_outlet'),
						'id_fl'       => $this->put('id_user'),
						'id_shift'    => $this->put('id_shift'));
			$this->db->where('id', $this->put('id'));
			$update = $this->db->update('tb_fl_to_outlet', $data);
			if ($update) {
				// $this->response(array('status' => 'Update is successful', 200));
				// $this->response(array('status' => '1', 200));
				echo "success";
			} else {
				// $this->response(array('status' => 'Failed, please try again', 502));
				// $this->response(array('status' => '0', 502));
				echo "failed";
			}
		}
	}
	/* Tidak Terpakai */
	function index_delete() {
        $where = array(
					'id'       => $this->delete('id'));
        $delete = $this->db->delete('tb_fl_to_outlet', $where);
        if ($delete) {
			// $this->response(array('status' => 'Update is successful', 200));
			// $this->response(array('status' => '1', 200));
			echo "success";
        } else {
			// $this->response(array('status' => 'Failed, please try again', 502));
			// $this->response(array('status' => '0', 502));
            echo "failed";
        }
    }
}