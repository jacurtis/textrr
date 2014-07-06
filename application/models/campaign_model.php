<?php

class Campaign_model extends CI_Model {
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function getAll($userid) {
		$data = array('users_id' => $userid);
		$this->db->where('users_id', $userid);
		$this->db->order_by('camp_sent', "desc");
		$query = $this->db->get('campaigns');
		return $query->result_array();
	}

	function createCampaign($data) {
		return $this->db->insert('campaigns', $data);
	}
}