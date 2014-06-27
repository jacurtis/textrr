<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class App extends CI_Controller {

	public function __construct() 
    {
        parent::__construct();

        if ($this->authex->logged_in() != TRUE) {
        	redirect('/');
        }
    }

	public function index()
	{
		// retrieve data from db
		$this->load->model('user_model');
		$userdata = $this->user_model->getUserData($this->session->userdata("user_id"));
		$title = 'Textrr Dashboard, Welcome '.$userdata['first_name'];

		$data = array(
				'title'			=> $title,
				'first_name'	=> $userdata['first_name']
			);
		$this->load->view('user/templates/header');
		$this->load->view('user/dashboard', $data);
		// if not logged in, then redirect to homepage

	}

	public function campaigns()
	{
		
	}

	public function lists()
	{
		$this->load->view('user/templates/header');
		$this->load->view('user/lists');
	}

	public function analytics()
	{
		
	}

	public function numbers()
	{
		
	}

}