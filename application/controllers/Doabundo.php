<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doabundo extends CI_Controller {
	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		$this->load->model('Bundo_model');

	}

	public function index()
	{
		if ($this->session->userdata('user')) {
			redirect('dashboard');
		} 
		else {
			redirect('login');
		}
	}

	public function dashboard()
	{
		$this->load->view('dashboard');
	}

	public function register()
	{
		if ($this->input->post()) {
			
			$data['username'] = $this->input->post('username');
			$data['password'] = $this->input->post('password');
			$data['alamat'] = $this->input->post('alamat');
			$data['e-mail'] = $this->input->post('email');
			$data['jenis_kelamin'] = $this->input->post('gender');
			$data['kontak'] = $this->input->post('hp');

			$id = $this->Bundo_model->register($data);
			
			if ($id){ 
				redirect('Doabundo');
			}
			else
				echo "Data Gagal disimpan";
		}
	}

	public function paket_makanan()
	{
		$this->load->view('v_paket_makanan');
	}

	public function makanan_minuman()
	{
		$this->load->view('v_makanan_minuman');
	}

	public function notifikasi()
	{
		$this->load->view('v_notifikasi');
	}

	public function cart()
	{
		$this->load->view('v_cart');
	}
	
}
