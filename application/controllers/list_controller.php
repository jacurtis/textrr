<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class List_controller extends CI_Controller
{

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
    	$this->load->model('list_model');
		$listdata = $this->list_model->getAllLists($this->userid);

		$data = array(
			'title'			=>	'All Your Lists',
			'lists' 		=>	$listdata,
			'nav_item'		=>	'lists'
			);

		$this->load->view('templates/app-header', $data);
		$this->load->view('list/lists', $data);
		$this->load->view('templates/app-footer');
    }

    public function create()
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

		$this->load->view('templates/app-header', $data);
		$this->load->view('list/createlist', $data);
		$this->load->view('templates/app-footer');
	}

	public function delete($listid = 0)
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

		$this->load->view('templates/app-header', $data);
		$this->load->view('list/deletelist', $data);
		$this->load->view('templates/app-footer');
	}

	public function view($listid)
	{
		if ($listid == 0) {
			redirect('/lists');
		}

		$this->load->model('list_model');
		$listdata = $this->list_model->getListData($listid);

		if ($listdata == FALSE || $listdata['users_id'] != $this->userid) {
			redirect('/lists');
		}

		$perpage = $this->input->get('perpage');
		$offset = $this->input->get('offset');
		$sort = $this->input->get('sort');
		$lists_numbers = null;

		if (!empty($perpage) && !empty($offset) && !empty($sort)) {
			$lists_numbers = $this->list_model->getAllNumbersForList($listid, $perpage, $offset, $sort);
		} else {
			$lists_numbers = $this->list_model->getAllNumbersForList($listid);
		}
		

		$title = $listdata['list_name'] . ' Full Details';
		$data = array(
				'title' 	=>	$title,
				'nav_item'	=>	'lists',
				'numbers'	=>	$lists_numbers,
				'list'		=>	$listdata
			);

		$this->load->view('templates/app-header', $data);
		$this->load->view('list/full-list', $data);
		$this->load->view('templates/app-footer');
	}

}