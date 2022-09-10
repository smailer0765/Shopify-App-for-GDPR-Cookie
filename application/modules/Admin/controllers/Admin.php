<?php defined('BASEPATH') or exit('No Direct Scrept Allowed!');

class Admin extends MX_Controller
{
	public $data, $logedin, $error, $success;

	function __construct()
	{
		parent::__construct();
		$this->logedin = $this->session->userdata("logedin");
		$this->data['error'] = $this->session->flashdata("error");
		$this->data['success'] = $this->session->flashdata("success");
		$this->data['logedin'] = $this->logedin;

		if ($this->logedin == "") {
			redirect("admin_login");
		}

		$this->data['title'] = "Dashboard";
		$this->data['page'] = "";
		$this->data['panel'] = "Dashboard";
	}

	function index()
	{
		$this->data['title']    = "Dashboard";
		$this->data['page']     = "Dashboard";
		$this->data['panel']    = "Home";

		$this->load_view();
	}

	function load_view($view = "dashboard")
	{
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view($view, $this->data);
		$this->load->view('footer');
	}

	function dashboard()
	{
		$this->load_view("dashboard");
	}

	function logout()
	{
		$this->session->unset_userdata("logedin");
		$this->session->set_flashdata("success", "You are Successfuly Loged Out");
		if($this->logedin['user_type_id'] == -1 ){
			redirect("superadmin_login");
		}else if($this->logedin['user_type_id'] == 1 ){
			redirect("admin_login");
		}else{
			redirect("user_login");
		}
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

}	
	
?>