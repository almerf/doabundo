<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Profile_Model extends CI_Model {
  public function getBiodata($username)
  {
    // # get the data from db
    $this->db->select('username, alamat, kontak, jenis_kelamin, e-mail, foto_profil');
    $this->db->where('username', $username);
    $this->db->from('user');
    $query = $this->db->get();
    return $query->row_array();
  }
}