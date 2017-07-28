<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        // Load form helper library
		$this->load->helper('form');
		$this->load->helper('array');
		// Load form validation library
		$this->load->library('form_validation');

		// Load session library
		$this->load->library('session');

		// Load database
		$this->load->model('login_model');
		
    }   

	public function index()
	{
		if (isset($_SESSION['account'])) {
			$this->load->view('templates/header');
			//$this->load->view('templates/footer');
			$this->load->view('home');
		}
		else {
			$this->load->view('login_view');
		}
		//$this->load->view('login_view');
	}

	public function welcome()
	{	
		$this->load->view('templates/header');
		$this->load->view('home');
	}

	public function utf8_str($str,$error_message){  
	    $mb = mb_strlen($str,'utf-8');  
	    $st = strlen($str);  
	    if($st==$mb && $str!=null)  
	        return 1;  
	    return 2;
	}  

	public function login_check()
	{
		$account = $_POST['acct'];
		$password = $_POST['pswd'];
		$error_message = '輸入錯誤，再試一次!';

		$account_type = $this->utf8_str($account,$error_message);

		$result = $this->login_model->login($account, $password);//進入新資料庫
		if (is_null($result[0]['EMPLOYEE_NAME'])) {
			//redirect('/user_authentication/login');
			$this->load->view('login_view',array('error_message' => $error_message));
			
		}
		else {
			$_SESSION['account'] = $account;
			//$this->load->library('../Show_db_controller/__construct');
			$this->welcome();
			//redirect('/purchase_controller/enter_purchase');
			//$this->load->view('homepage'/*,array('acc' => $_SESSION['$account'])*/);
			//print_r($result);
			//echo "<BR>".$_SESSION['account'];
			//redirect('/home/welcome');
		}
	}

	public function purchase_submit(){
		$data = ['PRODUCT_NAME'=>$_POST['PRODUCT_NAME'],
				'SOURCE_NAME'=>$_POST['SOURCE_NAME'],
				'PURCHASE_PRICE'=>$_POST['PURCHASE_PRICE'],
				'PURCHASE_AMOUNT'=>$_POST['PURCHASE_AMOUNT'],
				'PURCHASE_COST'=>$_POST['PURCHASE_COST'],
				'PURCHASE_TOTAL'=>$_POST['PURCHASE_TOTAL'],
				'PURCHASE_DATE'=>$_POST['PURCHASE_DATE'],
				'PURCHASE_S_AMOUNT'=>$_POST['PURCHASE_S_AMOUNT'],
				'PURCHASE_R_AMOUNT'=>$_POST['PURCHASE_R_AMOUNT'],
				'PURCHASE_Y_AMOUNT'=>$_POST['PURCHASE_Y_AMOUNT'],
				'PURCHASE_A_AMOUNT'=>$_POST['PURCHASE_A_AMOUNT']];

		$this->login_model->insert_purchase($data);
		print_r($data);
		echo $_POST['PRODUCT_NAME']."<BR>";
		echo $_SESSION['account'];
	}

	public function go_purchase(){
		redirect('/index.php/purchase_controller/index');
	}

	public function go_storage(){
		redirect('/index.php/storage_controller/index');
	}

}






