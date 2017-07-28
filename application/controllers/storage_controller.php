<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Storage_controller extends CI_Controller {


	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        // Load form helper library
		$this->load->helper('form');

		// Load form validation library
		$this->load->library('form_validation');

		// Load session library
		$this->load->library('session');

		// Load database
		$this->load->model('login_model');
    }   

    public function index()
    {
    	$this->load->view('check_storage');
    	$this->load->view('templates/header');
    }

    public function go_home()
    {
        redirect('/index.php/login/index');
    }

}






