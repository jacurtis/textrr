<?php

class List_model extends CI_Model {
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function addNewUser($firstName, $lastName, $email, $password)
	{
		$data = array(
			'first_name' => $firstName,
			'last_name' => $lastName,
			'email' => $email,
			'password' => $password 
			);
		$this->db->insert('users', $data);
	}

	function getAllLists($userid) {
		$data = array('users_id' => $userid);
		$query = $this->db->get_where('lists', $data);
		return $query->result_array();
	}
}