<?php 

class Logout extends CI_Controller {
	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		$this->load->model('Bundo_model');

	}
	public function index()
	{
		$this->session->unset_userdata('user');
		redirect('login');
	} 

}