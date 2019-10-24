<?php 

class Dashboard extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		
		$this->load->database();
		$this->load->helper('url');
		$this->load->model('Bundo_model');
		
		if (!$this->session->userdata('user')) {
			redirect('login');
		}	
	}
	public function index()
	{
		$this->load->model('Bundo_model');
		// $query = $this->Hima_model->getAllBerita();
		// $data['berita'] = $query->result_array();
		// $data['user'] = $this->session->userdata('admin');
		
		// $this->load->view('dashboard',$data);
		$this->load->view('dashboard');
	} 

}