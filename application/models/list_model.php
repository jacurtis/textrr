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
		return $this->db->insert('lists', $data);
	}

	function addNumberToList($data)
	{
		return $this->db->insert('lists_numbers', $data);
	}

	function getAllLists($userid) {
		$data = array('users_id' => $userid);
		$query = $this->db->get_where('lists', $data);
		return $query->result_array();
	}

	function getAllNumbersForList($listid, $perpage = 20, $offset = 0, $sort = "desc")
	{
		$data = array('lists_id' => $listid);

		$this->db->where('lists_id', $listid);
		$this->db->order_by('date_added', $sort);
		$this->db->limit($perpage, $offset);
		$query = $this->db->get('lists_numbers');

		return $query->result_array();
	}

	function deleteList($listid)
	{
		$data = array('id' => $listid);
		return $this->db->delete('lists', $data);
	}
}