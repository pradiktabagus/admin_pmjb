<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class selesai extends CI_Controller {

	public function _construct() {
		parent::_construct();
		$this->load->helper('url');
		if(!$this->session->userdata('username')) {
			redirect('');
		}
	}
	
	public function index()
	{
		$data['data'] = $this->Main_model->view_data_selesai();
		$this->load->view('selesai', $data);
	}
}
