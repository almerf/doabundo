<?php

class Search_Menu_model extends CI_Model {


	public function get_data($itemName)
	{
		$data['nama'] = $itemName;
		$this->db->select('*');
		$this->db->from('makanan');
		$this->db->like('nama', $itemName);
		$query = $this->db->get();
		$this->db->select('*');
		$this->db->from('paket_makanan');
		$this->db->like('nama', $itemName);
		$query2 = $this->db->get();
		#$sql = SELECT * FROM makanan WHERE id IN ? AND status = ? AND author = ?;
		#$this->db->query($sql, array(array(3, 6), 'live', 'Rick'));
		return array_merge($query->result_array(), $query2->result_array());
	}
}
