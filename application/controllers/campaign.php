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
}