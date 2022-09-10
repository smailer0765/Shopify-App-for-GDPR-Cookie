<?php defined('BASEPATH') or exit('No Direct Scrept Allowed!');

class User_login extends MX_Controller
{
	public $data, $logedin, $error, $success;
	
	function __construct()
	{
		parent::__construct();
		$this->logedin = $this->session->userdata('logedin');
		$this->data['logedin'] = $this->logedin;	
		$this->data['error']	= $this->session->flashdata("error");
		$this->data['success']	= $this->session->flashdata("success");
		$this->data['title']	= "User Login";
		$this->data['page']		= "User Login";	
	}
	
	function index()
	{
		if($this->logedin != ""){
            redirect("home");
		}
		$this->load_view();
	}
	
	function load_view($view = "user_login")
	{
		$this->load->view($view, $this->data);
	}
	
	function set_error($alert = "")
	{
		$this->session->set_flashdata("error", $alert);
		return true;
	}

	function set_success($alert = "")
	{
		$this->session->set_flashdata("success", $alert);
		return true;
	}
	
	function authorize()
	{
		$this->load->library('session');
		$email = $this->input->post("email");
		$password = md5($this->input->post("password"));

		if($email == "" || $password == ""){
			redirect("user_login");
		}

		$table 	= 'users';
		$filter = array('email' => $email, 'password' => $password, 'is_status' => 1, 'is_deleted' => 0);
		$data = $this->common_model->get_single($table, $filter);

		if($data != false){
			if(strcmp($email, $data['email']) == 0 && strcmp($password, $data['password']) == 0){
				unset($data['password']);
				$data['check_user'] = "user";
				$this->session->set_userdata("logedin", $data);
				$this->set_success("You are logged in!");
			}else{
				$this->set_error("Invalid Email Or Password!");
			}
		}else{
			$this->set_error("User Deactivated Or Invalid Email Or Password!");
		}
		redirect("user_login");
	}

	function logout()
	{
		if($this->logedin['user_type_id'] == 1)
		{
			$this->session->unset_userdata("logedin");
			$this->set_success("You are Successfuly Loged Out");
		}
		redirect("user_login");
	}
	
}	
	
?>