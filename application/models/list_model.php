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
		$success = $this->db->insert('lists_numbers', $data);
		$this->db->where('lists_id', $data['lists_id']);
		$this->db->from('lists_numbers');
		$data2['list_count'] = $this->db->count_all_results();
		$this->db->where('id', $data['lists_id']);
		$this->db->update('lists', $data2);
		return $success;
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

	function deleteNumbers($data)
	{
		$this->db->where('id', $data[0]);
		if (count($data) > 1) {
			for ($i=1; $i < count($data); $i++) { 
				$this->db->or_where('id', $data[$i]);
			}
		}
		return $this->db->delete('lists_numbers');
	}
}