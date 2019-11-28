<?php

class Search_Menu_model extends CI_Model {


	public function get_data($itemName)
	{
		$data['nama'] = $itemName;
		$this->db->select('*');
		$this->db->from('makanan');
		$this->db->like('nama', $itemName);
		$query = $this->db->get();
		#$sql = SELECT * FROM makanan WHERE id IN ? AND status = ? AND author = ?;
		#$this->db->query($sql, array(array(3, 6), 'live', 'Rick'));
		return $query->result_array();
	}
}
