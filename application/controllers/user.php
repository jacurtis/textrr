<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		
	}

	public function signup()
	{

		if ($this->authex->logged_in()) {
			redirect("/dashboard");
		}
		
		// load necessary helpers/ libraries
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button><i class="fa fa-ban-circle"></i><strong>Error: </strong>', '</div>');

		if (!empty($_POST['input-name'])) { // has the form been just submitted?
			
			// validate
			$this->form_validation->set_rules('input-name', 'Name', 'trim|required');
			$this->form_validation->set_rules('input-email', 'Email', 'trim|required|valid_email');
			$this->form_validation->set_rules('input-password', 'Password', 'trim|required|min_length[6]|max_length[20]');

			if ($this->form_validation->run() == TRUE && $this->input->post('terms-service') == TRUE) {
			
				// verify submitted information
				$tempName = $this->input->post('input-name');
				$fullname = explode(' ', $tempName, 2);
				$firstName = $fullname[0];
				$lastName = $fullname[1];

				$emailAddress = $this->input->post('input-email');
				$password = $this->input->post('input-password');
				// submit it to the database
				if ($this->authex->register($firstName, $lastName, $emailAddress, $password)) {
					// if successful, we want to load the new dashboard with the new user's information
					redirect('/dashboard', 'location', 301);
				} else {
					$this->load->view('signup');
				}
				
			} else { // now if the form didnt validation, redisplay errors
				$this->load->view('signup');
			}
		} else { // no the form is not freshly submitted
			$this->load->view('signup');
		}
	}

	public function signin()
	{
		if ($this->authex->logged_in()) {
			redirect("/dashboard");
		}

		if (!empty($_POST['input-email']) && !empty($_POST['input-password'])) {
			if($this->authex->login($this->input->post('input-email'), $this->input->post('input-password'))) {
				redirect("/dashboard");
			} else {
				$this->load->view('signin');
			}
		} else {
			$this->load->view('signin');
		}
	}

	public function logout()
	{
		$this->authex->logout();
		redirect('/');
	}

}