<?php

require APPPATH . '/libraries/REST_Controller.php';

class Project_region extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
	}
	function index_get() {
		$q = "SELECT a.id AS id_project_region,a.kode_project,b.nama_project,c.nama_region,d.nama AS nama_tl FROM tb_project_region a LEFT JOIN tb_project b ON a.kode_project=b.kode_project LEFT JOIN tb_region c ON a.id_region=c.id LEFT JOIN tb_user d ON a.id_tl=d.id_user WHERE a.id='".$this->get('id_project_region')."' AND b.deleted='0' AND c.deleted='0'";
		$get_data['data_utama'] = $this->db->query($q)->result();
		$qq = "SELECT a.id_outlet,a.nama_outlet,(SELECT COUNT(b.id) FROM tb_fl_to_outlet b WHERE b.id_outlet=a.id_outlet) AS jumlah_fl FROM tb_outlet a WHERE a.id_project_region='".$this->get('id_project_region')."' AND a.deleted='0'";
		$get_data['data_outlet'] = $this->db->query($qq)->result();
		if($get_data==NULL){
			// $this->response(array('status' => 'Result not found', 502));
			echo "no_data";
		}else{
			$this->response($get_data, 200);
		}
	}
	function index_post() {
		$where1 = array(
			'kode_project' => $this->post('kode_project'),
			'deleted' => '0'
		);
		$cek1 = $this->Master_model->getSelectedData('tb_project',$where1);
		if($cek1==NULL){
//			$this->response(array('status' => 'NIK tidak valid', 502));
            echo "kode_project invalid";
		}else{
			$where2 = array(
				'id' => $this->post('id_region'),
				'deleted' => '0'
			);
			$cek2 = $this->Master_model->getSelectedData('tb_region',$where2);
			if($cek2==NULL){
//				$this->response(array('status' => 'NIK tidak valid', 502));
                echo "id_region invalid";
			}else{
				$data = array(
					'kode_project' => $this->post('kode_project'),
					'id_region' => $this->post('id_region')
				);
				$cek3 = $this->Master_model->getSelectedData('tb_project_region',$data);
				if($cek3==NULL){
					$insert_to_table = $this->db->insert('tb_project_region',$data);
					if($insert_to_table=='1'){
	//					$this->response(array('status' => '1', 200));
	                    echo "success";
					}else{
	//					$this->response(array('status' => '0', 502));
	                    echo "failed";
					}
				}else{echo 'existed';}
			}
		}
	}
	function index_put() {
		$this->db->trans_start();
		$q = "SELECT a.* FROM tb_project_region a WHERE a.kode_project='".$this->put('kode_project')."' AND a.id_region='".$this->put('id_region')."' AND a.id NOT IN (".$this->put('id_project_region').")";
		$get_data = $this->db->query($q)->result();
		if($get_data==NULL){
	        $data = array(
						'kode_project'       => $this->put('kode_project'),
						'id_region'       => $this->put('id_region'),
	                    'id_tl'    => $this->put('id_tl'));
	        $this->db->where('id', $this->put('id_project_region'));
	        $update = $this->db->update('tb_project_region', $data);
        }else{
        	$where = array(
        		'kode_project'       => $this->put('kode_project'),
				'id_region'       => $this->put('id_region')
        	);
        	$this->db->delete('tb_project_region', $where);
        	$data = array(
				'kode_project'       => $this->put('kode_project'),
				'id_region'       => $this->put('id_region'),
                'id_tl'    => $this->put('id_tl'));
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
}