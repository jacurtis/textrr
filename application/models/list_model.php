<?php

class List_model extends CI_Model {
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function getListData($listid)
	{
		$data = array('id' => $listid);
		$query = $this->db->get_where('lists', $data);
		return $query->row_array();
	}

	function addNewList($listname, $userid, $phone)
	{
		$data = array(
				'users_id' 			=> $userid,
				'list_name'			=>	$listname,
				'list_phonenumber'	=>	$phone
			);
		$this->db->insert('lists', $data);
	}

	function getAllLists($userid) {
		$data = array('users_id' => $userid);
		$query = $this->db->get_where('lists', $data);
		return $query->result_array();
	}

	function deleteList($listid)
	{
		$data = array('id' => $listid);
		return $this->db->delete('lists', $data);
	}
}