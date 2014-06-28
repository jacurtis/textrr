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
		$this->load->view('user/templates/header', $data);
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

		$data = array(
			'title'			=>	'All Your Lists',
			'lists' 		=>	$listdata,
			'nav_item'		=>	'lists'
			);

		$this->load->view('user/templates/header', $data);
		$this->load->view('user/lists', $data);
		$this->load->view('user/templates/footer');
	}

	public function createNewList()
	{
		if ($this->input->post('listname') != FALSE) { // The form was just submitted
			$this->load->model('list_model');	
			$this->list_model->addNewList($this->input->post('listname'), $this->userid, $this->input->post('form-phonenumber'));
			redirect('/lists');
		}
		$this->load->model('number_model');
		$numbers = $this->number_model->getAllNumbersForUser($this->userid);


		$data = array(
				'title'		=>	'Create New List',
				'nav_item'	=>	'lists',
				'numbers'	=>	$numbers
			);

		$this->load->view('user/templates/header', $data);
		$this->load->view('user/createlist', $data);
		$this->load->view('user/templates/footer');
	}

	public function deleteList($listid = 0)
	{
		if ($listid == 0) {
			redirect('/lists');
		}

		// Check that a list id exsists
		$this->load->model('list_model');
		$listdata = $this->list_model->getListData($listid);
		
		if ($listdata == FALSE || $listdata['users_id'] != $this->userid) {
			redirect('/lists');
		}

		if ($this->input->post('deletelist') == "DELETE") {
			// a delete form was just submitted
			$this->list_model->deleteList($listid);
			redirect('/lists');
		}
		
		// then verify that the logged in user owns the list

		$data = array(
				'title' 	=> 	'Delete List',
				'nav_item'	=>	'lists',
				'list'		=>	$listdata
			);

		$this->load->view('user/templates/header', $data);
		$this->load->view('user/deletelist', $data);
		$this->load->view('user/templates/footer');
	}

	public function analytics()
	{
		
	}

	public function numbers()
	{
		
	}

}