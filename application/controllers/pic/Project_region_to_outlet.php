<?php

require APPPATH . '/libraries/REST_Controller.php';

class Project_region_to_outlet extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
	}
	function index_post() {
		$where1 = array(
			'id' => $this->post('id_project_region')
		);
		$cek1 = $this->Master_model->getSelectedData('tb_project_region',$where1);
		if($cek1==NULL){
			// $this->response(array('status' => 'NIK tidak valid', 502));
            echo "id_project_region invalid";
		}else{
			$where2 = array(
				'id_outlet' => $this->post('id_outlet'),
				'deleted' => '0'
			);
			$cek2 = $this->Master_model->getSelectedData('id_outlet',$where2);
			if($cek2==NULL){
				// $this->response(array('status' => 'NIK tidak valid', 502));
                echo "id_outlet invalid";
			}else{
				$data = array(
					'id_project_region' => $this->post('id_project_region'),
					'id_outlet' => $this->post('id_outlet')
				);
				$cek3 = $this->Master_model->getSelectedData('tb_project_region_to_outlet',$data);
				if($cek3==NULL){
					$insert_to_table = $this->db->insert('tb_project_region_to_outlet',$data);
					if($insert_to_table=='1'){
						// $this->response(array('status' => '1', 200));
	                    echo "success";
					}else{
						// $this->response(array('status' => '0', 502));
	                    echo "failed";
					}
				}else{echo 'existed';}
			}
		}
	}
	function index_put() {
		$this->db->trans_start();
		$q = "SELECT a.* FROM tb_project_region_to_outlet a WHERE a.id_project_region='".$this->put('id_project_region')."' AND a.id_outlet='".$this->put('id_outlet')."' AND a.id_project_region_to_outlet NOT IN (".$this->put('id_project_region_to_outlet').")";
		$get_data = $this->db->query($q)->result();
		if($get_data==NULL){
	        $data = array(
						'id_project_region'       => $this->put('id_project_region'),
						'id_outlet'       => $this->put('id_outlet'));
	        $this->db->where('id_project_region_to_outlet', $this->put('id_project_region_to_outlet'));
	        $update = $this->db->update('tb_project_region_to_outlet', $data);
        }else{
			echo 'existed';
        	// $where = array(
        	// 	'kode_project'       => $this->put('kode_project'),
			// 	'id_region'       => $this->put('id_region')
        	// );
        	// $this->db->delete('tb_project_region', $where);
        	// $data = array(
			// 	'kode_project'       => $this->put('kode_project'),
			// 	'id_region'       => $this->put('id_region'),
            //     'id_tl'    => $this->put('id_tl'));
        }
        $this->db->trans_complete();
		if($this->db->trans_status() === false){
			echo "failed";
		}else{
			echo "success";
		}
		/*
        if ($update) {
			$this->response(array('status' => 'Update is successful', 200));
			$this->response(array('status' => '1', 200));
        } else {
			$this->response(array('status' => 'Failed, please try again', 502));
			$this->response(array('status' => '0', 502));
        }
        */
	}
	function index_get() {
        $where = array(
					'id_project_region_to_outlet'       => $this->get('id_project_region_to_outlet'));
        $delete = $this->db->delete('tb_project_region_to_outlet', $where);
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