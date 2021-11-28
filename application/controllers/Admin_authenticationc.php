<?php

error_reporting(0);

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_authenticationc extends CI_Controller {

	
	public function index()
	{
		$email=$this->input->post('email');
        $password=$this->input->post('password');
        $this->load->model('Admin_authenticationm');
        $this->Admin_authenticationm->check_user($email,$password);
	}

	public function logout()
	{
		unset($_SESSION['id']);
        unset($_SESSION['name']);
        unset($_SESSION['type']);
        $this->session->sess_destroy();
        redirect('Welcome');
	}

}
