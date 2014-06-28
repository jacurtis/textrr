<?php

class Number_model extends CI_Model {
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function getAllNumbersForUser($userid) {
		$data = array('users_id' => $userid);
		$query = $this->db->get_where('numbers', $data);
		return $query->result_array();
	}
}