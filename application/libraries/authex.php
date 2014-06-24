<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Authex {

    function Authex()
    {
    	$CI =& get_instance();

	    //load libraries
	    $CI->load->database();
	    $CI->load->library("session");
    }

    function get_userdata()
    {
	    $CI =& get_instance();
	    
	    if( ! $this->logged_in())
	    {
	        return false;
	    }
	    else
	    {
	         $query = $CI->db->get_where("users", array("ID" => $CI->session->userdata("user_id")));
	         return $query->row();
	    }
	}

	function logged_in()
	{
		$CI =& get_instance();
		return ($CI->session->userdata("user_id")) ? true : false;
	}

	function login($email, $password)
	{
		$CI =& get_instance();

		$data = array(
			"email" => $email,
			"password" => sha1($password)
			);
		
		$query = $CI->db->get_where("users", $data);

		if ($query->num_rows() !== 1) {
			/* their username and password combination
			were not found in the database */
			return false;
		} else {
			// update the last login time
			$last_login = date("Y-m-d H-i-s");

			$data = array("last_login" => $last_login);

			$CI->db->update("users", $data);

			// store the user id in the session
			$CI->session->set_userdata("user_id", $query->row()->id);

			return true;
		}
	}

	function logout()
	{
		$CI =&get_instance();
		$CI->session->unset_userdata("user_id");
	}

	function register($first_name, $last_name, $email, $password)
	{
		$CI =& get_instance();

		// ensure the email is unique
		if ($this->can_register($email)) {
			$data = array(
				"first_name"	=>	$first_name,
				"last_name"		=>	$last_name,
				"email" 		=> 	$email,
				"password"		=> 	sha1($password)
				);

			$CI->db->insert("users", $data);

			return true;
		}

		return false;
	}

	function can_register($email)
	{
		$CI =& get_instance();

		$query = $CI->db->get_where("users", array("email" => $email));

		return ($query->num_rows() < 1) ? true : false;
	}
}

/* End of file Someclass.php */