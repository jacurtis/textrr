<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Campaign extends CI_Controller {
	private $userid;
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('phonenumber_helper');
		if ($this->authex->logged_in() == FALSE) {
			redirect('/');
		} else {
			$this->userid = $this->session->userdata('user_id');
		}
	}

	public function index()
	{
		$this->load->model('campaign_model');
		$campaigns = $this->campaign_model->getAll($this->userid);

		$data = array(
				'title' 		=> 'View All Campaigns',
				'nav_item'		=> 'campaigns',
				'campaigns'		=>	$campaigns
			);

		$this->load->view('templates/app-header', $data);
		$this->load->view('campaign/campaigns', $data);
		$this->load->view('templates/app-footer');
	}

	public function create()
	{
		if (!empty($_POST['form-campaign-title'])) {
			# submit form and redirect
			$this->load->model('campaign_model');

			$info = array(
					'users_id' => $this->userid,
					'lists_id' =>	$this->input->post('form-list-selection'),
					'camp_title'	=>	$this->input->post('form-campaign-title'),
					'camp_text'		=>	$this->input->post('form-campaign-message')
				);
			$this->campaign_model->createCampaign($info);
			redirect('/campaigns');
		}

		$this->load->model('list_model');
		$lists = $this->list_model->getAllLists($this->userid);

		$data = array(
				'title'		=>	'Create New Campaign',
				'nav_item'	=>	'campaigns',
				'lists'		=> 	$lists
			);

		$this->load->view('templates/app-header', $data);
		$this->load->view('campaign/create', $data);
		$this->load->view('templates/app-footer');
	}
}