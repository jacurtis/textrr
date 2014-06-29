<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class App extends CI_Controller {	
	private $userid;
	public function __construct() 
    {
        parent::__construct();
        $this->load->helper('phonenumber_helper');
        if ($this->authex->logged_in() == FALSE) {
        	redirect('/');
        } else {
			$this->userid = $this->session->userdata("user_id");
        }
    }

	public function index()
	{
		// retrieve data from db
		$this->load->model('user_model');
		$userdata = $this->user_model->getUserData($this->userid);
		$title = 'Textrr Dashboard, Welcome '.$userdata['first_name'];

		$data = array(
				'title'			=> $title,
				'first_name'	=> $userdata['first_name'],
				'nav_item'		=> 'dashboard'
			);
		$this->load->view('templates/app-header', $data);
		$this->load->view('dashboard', $data);
		// if not logged in, then redirect to homepage

	}

	public function campaigns()
	{
		
	}

	public function analytics()
	{
		
	}

	public function numbers()
	{
		
	}

}