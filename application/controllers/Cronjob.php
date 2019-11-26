<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cronjob extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function reset_absent()
	{
		$q = "SELECT a.* FROM tb_user a";
        $get_data = $this->db->query($q)->result();
        foreach ($get_data as $key => $value) {
            $q3 = "UPDATE tb_user SET status_absen = 'keluar', absen_today = 'tidak' WHERE nik = '".$value->nik."'";
			$update_absent = $this->db->query($q3);
        }
	}
}
