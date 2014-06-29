<?php

class Campaign_model extends CI_Model {
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function getAll($userid) {
		$data = array('users_id' => $userid);
		$query = $this->db->get_where('campaigns', $data);
		return $query->result_array();
	}


}