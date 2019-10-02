<?php

require APPPATH . '/libraries/REST_Controller.php';

class Outlet extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
	}
	function index_get() {
		// $q = "SELECT a.id_outlet,a.nama_outlet,d.nama AS nama_tl FROM tb_outlet a LEFT JOIN tb_project_region b ON a.id_project_region=b.id LEFT JOIN tb_user d ON b.id_tl=d.id_user WHERE a.id_outlet='".$this->get('id_outlet')."' AND a.deleted='0'";
		// $get_data['data_utama'] = $this->db->query($q)->result();
		if($this->get('id_project_region')!=NULL){
			// $get_data = $this->Master_model->getSelectedData('tb_project_region_to_outlet a', 'a.id_outlet,b.nama_outlet,d.nama AS nama_tl',array('a.id_project_region'=>$this->get('id_project_region'),'b.deleted'=>'0'),'','','','',array(
			// 	array(
			// 		'table' => 'tb_outlet b',
			// 		'on' => 'a.id_outlet=b.id_outlet',
			// 		'pos' => 'LEFT'
			// 	),
			// 	array(
			// 		'table' => 'tb_project_region c',
			// 		'on' => 'a.id_project_region=c.id',
			// 		'pos' => 'LEFT'
			// 	),
			// 	array(
			// 		'table' => 'tb_user d',
			// 		'on' => 'c.id_tl=d.id_user',
			// 		'pos' => 'LEFT'
			// 	)
			// ))->result();
			// if($get_data==NULL){
			// 	echo "no_data";
			// }else{
			// 	$this->response($get_data, 200);
			// }
			$q = "SELECT a.id_outlet,b.nama_outlet,d.nama AS nama_tl FROM tb_project_region_to_outlet a LEFT JOIN tb_outlet b ON a.id_outlet=b.id_outlet LEFT JOIN tb_project_region c ON a.id_project_region=c.id LEFT JOIN tb_user d ON c.id_tl=d.id_user WHERE a.id_project_region='".$this->get('id_project_region')."' AND b.deleted='0'";
			$get_data = $this->db->query($q)->result();
			if($get_data==NULL){
				echo "no_data";
			}else{
				$this->response($get_data, 200);
			}
		}else{
			$q = "SELECT a.id_outlet,b.nama_outlet,d.nama AS nama_tl FROM tb_project_region_to_outlet a LEFT JOIN tb_outlet b ON a.id_outlet=b.id_outlet LEFT JOIN tb_project_region c ON a.id_project_region=c.id LEFT JOIN tb_user d ON c.id_tl=d.id_user WHERE a.id_outlet='".$this->get('id_outlet')."' AND b.deleted='0'";
			$get_data['data_utama'] = $this->db->query($q)->result();
			$q2 = "SELECT a.id_project_region_to_outlet,a.id_outlet,b.nama_outlet,d.nama AS nama_tl FROM tb_project_region_to_outlet a LEFT JOIN tb_outlet b ON a.id_outlet=b.id_outlet LEFT JOIN tb_project_region c ON a.id_project_region=c.id LEFT JOIN tb_user d ON c.id_tl=d.id_user WHERE a.id_outlet='".$this->get('id_outlet')."' AND b.deleted='0'";
			$get_id =  $this->db->query($q2)->row();
			$q3 = "SELECT b.nama AS nama_fl,c.nama_shift FROM tb_fl_to_outlet a LEFT JOIN tb_user b ON a.id_fl=b.id_user LEFT JOIN tb_shift c ON a.id_shift=c.id WHERE a.id_project_region_to_outlet='".$get_id->id_project_region_to_outlet."' AND c.deleted='0'";
			$get_data['data_fl'] = $this->db->query($q3)->result();
			if($get_data==NULL){
				// $this->response(array('status' => 'Result not found', 502));
				echo "no_data";
			}else{
				$this->response($get_data, 200);
			}
		}
	}
}