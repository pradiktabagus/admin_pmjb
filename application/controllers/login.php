<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
	function _construct(){
		parent::_construct();
		$this->load->model('login_model');
	}

	function index() 
	{
		$this->load->view('login');
	}
	
	function masuk()
	{
		// $this->form_validation->set_rules('username', 'Username', 'required');
		// $this->form_validation->set_rules('password', 'Password', 'required');
			$username = $this->input->post('username');
			$password = $this->input->post('password');


			$cek  = $this->login_model->cek($username, $password);
			
			if($cek->num_rows()==1)
			{
				foreach($cek->result() as $data)
				{
					$sess_data['id'] 		= $data->id;
					$sess_data['email'] 	= $data->email;
					$sess_data['username'] 	= $data->username;
					$this->session->set_userdata($sess_data);
				}
				redirect('Dashboard');
			}
			else
			{
				$this->session->set_flashdata('pesan', 'Maaf username & password mu salah!!');
				redirect('');
			}
	}

	function keluar()
	{
		$this->session->unset_userdata('username');
		redirect('');
	}
}
