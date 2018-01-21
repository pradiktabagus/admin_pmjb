<?php

class register extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function _construct(){
		parent::_construct();
        $this->load->helper('url');
	}
	public function index()
	{
        if(isset($_POST['register'])){
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required|matches[password]');

            if($this->form_validation->run()==TRUE){
                echo 'form validate';

                $data = array(
                    'username'=>$_POST['username'],
                    'email'=>$_POST['email'],
                    'password'=>md5($_POST['password'])
                );
                $this->db->insert('user_admin', $data);
                $this->session->set_flashdata("success", "kamu menjadi admin baru");
                redirect("login", "refresh");
            }
        }
		$this->load->view('register');
	}
}
