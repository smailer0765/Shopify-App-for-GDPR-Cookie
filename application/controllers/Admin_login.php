<?php defined('BASEPATH') or exit('No Direct Scrept Allowed!');

class Admin_login extends MX_Controller
{
	public $data, $logedin, $error, $success;
	function __construct()
	{
		parent::__construct();
		$this->logedin = $this->session->userdata("logedin");
		$this->data['error']	= $this->session->flashdata("error");
		$this->data['success']	= $this->session->flashdata("success");
		$this->data['title']	= "Admin Login";
		$this->data['page']		= "Admin Login";	
	}
	
	function index()
	{
		if($this->logedin != "")
		{
            redirect("admin");
		}
		$this->load_view();
	}
	
	function load_view($view = "admin_login")
	{
		$this->load->view($view, $this->data);
	}
	
	function authorize()
	{
		$email = $this->input->post("email");
		$password = md5($this->input->post("password"));

		if($email == "" || $password == ""){
			redirect("admin_login");
		}

		$filter = array('username' => $email, 'password' => $password);

		$table 	= 'admins';
		$data = $this->common_model->get_single($table, $filter);

		if($data != false)
		{
			if(strcmp($email, $data['username']) == 0 && strcmp($password, $data['password']) == 0)
			{
				unset($data['password']);
				$data['check_user'] = "admin";
				$this->session->set_userdata('logedin', $data);
				$this->session->set_flashdata("sucess", $data['full_name']. ", You are logged in!");
			}
			else{
				$this->session->set_flashdata("error", "Invalid Username Or Password!");
			}
		}
		else
		{
			$this->session->set_flashdata("error", "Invalid Username Or Password!");
		}
		
		redirect("admin_login");
	}

	function logout()
	{
		if($this->logedin['user_type_id'] == 1)
		{
			$this->session->unset_userdata("logedin");
			$this->session->set_flashdata("success", "You are Successfuly Loged Out");
		}
		redirect("admin_login");
	}
}
?>