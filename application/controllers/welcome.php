<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('landing');
	}

	public function signup()
	{
		// load necessary helpers/ libraries
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button><i class="fa fa-ban-circle"></i><strong>Error: </strong>', '</div>');

		if (!empty($_POST['input-name'])) { // has the form been just submitted?
			
			// validate
			$this->form_validation->set_rules('input-name', 'Name', 'trim|required');
			$this->form_validation->set_rules('input-email', 'Email', 'trim|required|valid_email');
			$this->form_validation->set_rules('input-password', 'Password', 'trim|required|min_length[6]|max_length[20]|sha1');

			if ($this->form_validation->run() == TRUE && $this->input->post('terms-service') == TRUE) {
			
				// verify submitted information
				$tempName = $this->input->post('input-name');
				$fullname = explode(' ', $tempName, 2);
				$firstName = $fullname[0];
				$lastName = $fullname[1];

				$emailAddress = $this->input->post('input-email');
				$password = $this->input->post('input-password');
				// submit it to the database
				$this->load->model('User_model', '', TRUE);
				$this->User_model->addNewUser($firstName, $lastName, $emailAddress, $password);

				// if successful, we want to load the new dashboard with the new user's information
				redirect('/dashboard', 'location', 301);
			} else { // now if the form didnt validation, redisplay errors
				$this->load->view('signup');
			}
		} else { // no the form is not freshly submitted
			$this->load->view('signup');
		}
	}

	public function signin()
	{
		$this->load->view('signin');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */