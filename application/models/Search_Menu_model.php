<?php

class Search_Menu_model extends CI_Model {


	public function validate()
	{
		$data['username'] = $this->input->post('username');
		$data['password'] = $this->input->post('password');
		return $this->db->get_where('user', $data)->row_array();
	}

	public function register($data)
	{
		$this->db->insert('user', $data);
		return $this->db->insert_id();
	}
}
