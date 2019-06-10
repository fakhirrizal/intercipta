<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Master_model extends CI_Model{
	function get($tbl_name, $select = '', $where = '', $order = '', $limit = '', $start = '0', $group = '', $join = '') {
        if (!empty($select))
            $this->db->select($select, false);
        if (!empty($where))
            $this->db->where($where);
        if (!empty($order))
            $this->db->order_by($order);
        if (!empty($limit))
            $this->db->limit($limit, $start);
        if (!empty($group))
            $this->db->group_by($group);
        if (!empty($join) && is_array($join)) {
            if (!empty($join['table']) && !empty($join['on'])) {
                $join = array($join);
            }

            foreach ($join as $item) {
                if (!empty($item['table']) && !empty($item['on'])) {
                    if (!empty($item['pos'])) {
                        $this->db->join($item['table'], $item['on'], $item['pos']);
                    } else {
                        $this->db->join($item['table'], $item['on']);
                    }
                }
            }
        }

        return $this->db->get($tbl_name);
    }
    function manualQuery($q)
		{
			return $this->db->query($q)->result();
		}
    function insertData($table,$data){
		$res = $this->db->insert($table,$data);
		return $res;
        }
    public function getSelectedData($table,$data)
        {
            return $this->db->get_where($table, $data)->result();
		}
	function cleanData($table){
		$q = $this->db->query("TRUNCATE TABLE $table");
		return $q;
	}
	function getAlldata($table){
		return $this->db->get($table)->result();
	}
	function updateData($table,$data,$field_key)
	{
		$this->db->update($table,$data,$field_key);
	}
	function deleteData($table,$data)
	{
		$this->db->delete($table,$data);
	}
	function getLastID($table){
		return $this->db->query('SELECT id FROM '.$table.' ORDER BY created_at DESC LIMIT 1')->result();
	}
}