<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class App extends CI_Controller {	
	private $userid;
	public function __construct() 
    {
        parent::__construct();
        //private $userid;
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
		$this->load->model('list_model');
		$listdata = $this->list_model->getAllLists($this->userid);

		$data = array('lists' => $listdata);

		$this->load->view('user/templates/header');
		$this->load->view('user/lists', $data);
	}

	public function analytics()
	{
		
	}

	public function numbers()
	{
		
	}

}