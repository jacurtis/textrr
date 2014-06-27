<?php

class User_model extends CI_Model {
	function __construct()
	{
		parent::__construct();
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

	function getUserData($userid) {
		$data = array('id' => $userid);
		$query = $this->db->get_where('users', $data, 1);
		return $query->row_array();
	}
}