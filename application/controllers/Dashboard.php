<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function _construct() {
		parent::_construct();
		$this->load->helper('url');
		if(!$this->session->userdata('username')) {
			redirect('');
		}
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}
	
}
