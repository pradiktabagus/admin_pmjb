<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pengaduan extends CI_Controller 
{

	public function _construct() {
		parent::_construct();
		// $this->load->helper('url');		
		$this->load->model('Main_model');
		if(!$this->session->userdata('username')) {
			redirect('');
		}
	}

	public function index($msg='')
	{
		$data['msg'] = $msg;
		$data['data'] = $this->Main_model->view_data_pengajuan();
		$this->load->view('pengaduan', $data);
	}

	function proses_pengaduan($id='')
	{
		$proses = $this->Main_model->process_data('pengaduan', array('status' => 1), array('id_pengaduan'=>$id));
		if($proses > 0)
		{
			$message = '<div id="alert" class="alert alert-success">
							<button class="close" data-close="alert"></button> Update Proses Berhasil 
						</div>';
		} else {
			$message = '<div id="alert" class="alert alert-danger">
							<button class="close" data-close="alert"></button> Update Proses Gagal 
						</div>';
		}
		$this->index($message);
		$this->session->set_flashdata('message', $message);
		redirect('pengaduan');
	}

	function proses_penyelesaian($id='')
	{
		$proses = $this->Main_model->process_data('pengaduan', array('status' => 9), array('id_pengaduan'=>$id));
		if($proses > 0)
		{
			$message = '<div id="alert" class="alert alert-success">
							<button class="close" data-close="alert"></button> Selesai Ditangani 
						</div>';
		} else {
			$message = '<div id="alert" class="alert alert-danger">
							<button class="close" data-close="alert"></button> Gagal Update Status 
						</div>';
		}
		$this->index($message);
		$this->session->set_flashdata('message', $message);
		redirect('pengaduan');
	}
}
?>