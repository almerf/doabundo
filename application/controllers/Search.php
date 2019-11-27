<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {
	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		$this->load->model('Search_Menu_model');

	}
	public function search($item_search)
	{
		
		return "ajhdfgasjdgasdjkagdjasgdajdgasjkdg";
	}


	public function index()
	{
    #$this->load->view('partials/header');
    $this->load->view('v_hasil_pencarian', $array = array('data' => $this->search($this->input->post('itemName'))));
    #$this->load->view('partials/footer');
	}



}
