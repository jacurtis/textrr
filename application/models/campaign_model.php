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

	function getCampaign($id)
	{
		$data = array('id' => $id);
		$query = $this->db->get_where('campaigns', $data, 1);
		return $query->row_array();
	}

	function getCampaignWithList($id)
	{
		//$this->db->select(*);
		$this->db->from('campaigns');
		$this->db->where('campaigns.id', $id);
		$this->db->join('lists', 'lists.id = campaigns.lists_id');

		$query = $this->db->get();

		return $query->row_array();
	}
}