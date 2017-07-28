<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Purchase_controller extends CI_Controller {


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
        $this->load->view('templates/header');
        $this->load->view('pages/totalpurchase');
    	//$this->load->view('purchase_insert');
    	
    }
    
    public function go_home()
    {
        redirect('/index.php/login/index');

    }

    public function enter_purchase()
    {
    	echo "string";
    	$this->load->view('homepage');
    }

    public function insert_purchase()
    {
    	$this->load->view('homepage');
    }


}






