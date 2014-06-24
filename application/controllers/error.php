<?php


class Error extends CI_Controller 
{
    public function __construct() 
    {
        parent::__construct(); 
    }

    public function index()
    {
        $this->output->set_status_header('404'); 
        $this->load->view('error/404'); //loading in my template
    } 

    public function my404() 
    { 
        $this->output->set_status_header('404'); 
        $this->load->view('error/404'); //loading in my template 
    } 

    public function my500() 
    { 
        $this->output->set_status_header('500'); 
        $this->load->view('error/500'); //loading in my template 
    }
}