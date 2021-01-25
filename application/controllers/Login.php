<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function index()
	{
		$this->load->helper('url');
		$this->load->view('layout/head');
		$this->load->view('login_page');
	}

	public function login_attempt()
	{
		$this->load->helper('url');
		$this->load->view('layout/head');
		$this->load->view('layout/header');
		$this->load->view('welcome_message');
		$this->load->view('layout/footer');
	}
}