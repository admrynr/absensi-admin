<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('layout/head');
		$this->load->view('login_page');
	}

	public function login_attempt()
	{
		$username = $this->input->post("username");
        $password = $this->input->post("userpassword");

        $result = $this->user_model->get_user($username);

        //apakah user terdaftar
		if ($result)
		{
			//periksa password
			$isPasswordTrue = $password == $result->user_password;

			if ($isPasswordTrue){
				//login sukses

				//simpan session
				$this->session->set_userdata(['user' => $username]);
				$this->session->set_userdata(['logged_in' => TRUE]);
				redirect(site_url('home'));
			}
			$this->session->set_flashdata('error', 'Username atau password yang anda masukkan salah.');
			redirect(site_url('login/index'));
		}
			$this->session->set_flashdata('error', 'Anda belum terdaftar sebagai user.');
			redirect(site_url('login/index'));
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(site_url('login/index'));

	}
}