<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller 
{
	public function __construct()

	{
		parent::__construct();
		$this->load->model('User_model');
		$this->load->library('session');
		$this->load->database();

	}	

	public function index()
	{
		$this->load->view('page/login');
	}

	public function login_user()
	{
		$user_email = $this->input->post('user_email');
		$user_pass = $this->input->post('user_pass');
		$data=$this->User_model->login($user_email,$user_pass);
		if($data == 1)
		{
			$this->load->view('page/dashboard');
		}
		else
		{
			$this->load->view('page/login');
		}
		
	}
	public function signupdata()
	{
		$this->load->view('page/signup');
	}
	public function signup()
	{
		$data=array(
		'user_name' => $this->input->post('user_name'),
		'user_email'=> $this->input->post('user_email'),
		'user_pass' => $this->input->post('user_pass'));
		
		$data=$this->User_model->signup($data);
		$this->load->view('page/login');
	
	}
	public function forgetpass()
	{
		$this->load->view('page/forget');

	}
	public function forget()
	{
	$user_email = $this->input->post('user_email');
	$new_pass = $this->input->post('new_pass');
	$set_pass = $this->User_model->forgetpass($user_email,$new_pass);
		if($set_pass)
		{
			$this->load->view('page/login');
		}
		else
		{
			$this->load->view('page/forget');
		}
	}
}
