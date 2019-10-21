<?php 

class Login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		$this->load->model('Bundo_model');

		if ($this->session->userdata('user')) {
		}

	}
	public function index()
	{

		$this->load->view('login_register'); 
	} 

	public function verify()
	{

		$check = $this->Bundo_model->validate();
		if ($check) { 
			$this->session->set_userdata('user',$check);
			$this->load->view('dashboard');
		} else {
			redirect('login');
		}
	}

}