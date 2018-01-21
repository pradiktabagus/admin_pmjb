<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dikerjakan extends CI_Controller {

	public function _construct() {
		parent::_construct();
		if(!$this->session->userdata('username')) {
			redirect('');
		}
	}
	
	public function index()
	{
		$data['data'] = $this->Main_model->view_data_dikerjakan();
		$this->load->view('dikerjakan', $data);
	}
}
