<?php

require APPPATH . '/libraries/REST_Controller.php';

class Product extends REST_Controller {

	function __construct($config = 'rest') {
		parent::__construct($config);
	}
	function index_get() {
		if($this->get('id_produk')==NULL){
			$q = "SELECT o.id_produk, o.kode_produk, o.nama_produk, o.foto, o.id_client, a.nama AS nama_client FROM tb_produk o LEFT JOIN tb_user a ON o.id_client=a.id_user WHERE o.deleted='0' ORDER BY `o`.`nama_produk` ASC";
			$get_data = $this->db->query($q)->result();
			if($get_data==NULL){
				echo "no_data";
			}else{
				$this->response($get_data, 200);
			}
		}else{
			$q = "SELECT o.id_produk, o.kode_produk, o.nama_produk, o.foto, o.id_client, a.nama AS nama_client FROM tb_produk o LEFT JOIN tb_user a ON o.id_client=a.id_user WHERE o.id_produk = '".$this->get('id_produk')."' AND o.deleted='0' ORDER BY `o`.`nama_produk` ASC";
			$get_data = $this->db->query($q)->result();
			if($get_data==NULL){
				echo "no_data";
			}else{
				$this->response($get_data, 200);
			}
		}
	}
	function index_post() {
        $cek =  $this->db->query("SELECT a.* FROM tb_produk a WHERE a.id_produk='".$this->post('id_produk')."'")->result();
		if($cek==NULL){
			$sekarang = date("Ymd_His");
            $file_name = $sekarang.".jpg";
            $actual_path = "/home/aplikasi/public_html/intercipta/assets/foto-produk/".$file_name;
            $actual_path2 = base_url()."assets/foto-produk/".$file_name;
            $image = $this->post('foto');
            if (file_put_contents($actual_path, base64_decode($image)) != null) {
                $q = "INSERT INTO tb_produk(id_produk,kode_produk,nama_produk,foto,id_client) VALUES('".$this->post('id_produk')."','".$this->post('kode_produk')."','".$this->post('nama_produk')."','".$actual_path2."','".$this->post('id_client')."')";
                $insert_to_table = $this->db->query($q);
                if($insert_to_table=='1'){
                    echo "success";
                }else{
                    echo "failed";
                }
            }else{
                echo "failed";
            }
		}else{
			echo "failed";
		}
	}
	function index_put() {
		if($this->put('foto')==NULL){
			$data = array(
					'kode_produk'       => $this->put('kode_produk'),
					'nama_produk'       => $this->put('nama_produk'),
					'id_client'       => $this->put('id_client')
				);
			$this->db->where('id_produk', $this->put('id_produk'));
			$update = $this->db->update('tb_produk', $data);
			if ($update) {
				echo "success";
			} else {
				echo "failed";
			}
		}else{
            $sekarang = date("Ymd_His");
            $file_name = $sekarang.".jpg";
            $actual_path = "/home/aplikasi/public_html/intercipta/assets/foto-produk/".$file_name;
            $actual_path2 = base_url()."assets/foto-produk/".$file_name;
            $image = $this->put('foto');
            if (file_put_contents($actual_path, base64_decode($image)) != null) {
                $data = array(
					'kode_produk'       => $this->put('kode_produk'),
					'nama_produk'       => $this->put('nama_produk'),
					'foto'			=> $actual_path2,
					'id_client'       => $this->put('id_client')
				);
				$this->db->where('id_produk', $this->put('id_produk'));
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
}