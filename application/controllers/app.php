<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class App extends CI_Controller {

	public function index()
	{
		// if logged in, then show dashboard
		$this->load->view('user/templates/header');
		$this->load->view('user/dashboard');
		// if not logged in, then redirect to homepage

	}

	public function campaigns()
	{
		
	}

	public function lists()
	{
		
	}

	public function analytics()
	{
		
	}

	public function numbers()
	{
		
	}

}