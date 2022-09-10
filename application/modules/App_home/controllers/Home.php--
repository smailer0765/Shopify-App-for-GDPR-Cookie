<?php defined('BASEPATH') or exit('No Direct Scrept Allowed!');

class Home extends MX_Controller{

	public $data, $logedin, $error, $success;

	function __construct()
	{
		parent::__construct();
		$this->logedin = $this->session->userdata("logedin");
		$this->data['error'] = $this->session->flashdata("error");
		$this->data['success'] = $this->session->flashdata("success");
		$this->data['logedin'] = $this->logedin;
		
		if ($this->logedin == "") {
			redirect("user_login");
		}
		
		$this->data['title'] = "Dashboard";
	}
	
    function index()
	{
		$table = 'dashboard';
		$filter = array(
			'user_id' => $this->logedin['id'],
		);
		$this->data['row'] = $this->common_model->get_single($table, $filter);
		
		$this->load_view();
	}

	function load_view($view = "dashboard")
	{
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view($view, $this->data);
		$this->load->view('footer');
	}
	
	function logout()
	{
		$this->session->unset_userdata("logedin");
		$this->session->unset_userdata("access_token");
		$this->session->set_flashdata("success", "You are Successfuly Logged Out");
		redirect("user_login");
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
	
	function setting()
	{
		$this->data['title']    = "Settings";
		
		$table = 'dashboard';
		$filter = array( 'user_id' => $this->logedin['id'] );
		$this->data['row'] = $this->common_model->get_single($table, $filter);
		
		$table = 'general_setting';
		$this->data['setting_data'] = $this->common_model->get_single($table, $filter);
		
		$table = 'layouts';
		$this->data['layout_data'] = $this->common_model->get_single($table, $filter);
		
		$table = 'advance_setting';
		$this->data['advance_data'] = $this->common_model->get_single($table, $filter);

		$this->load_view('setting');
    }
	
	function insert_data()
	{
		$enabled = $_POST['enabled'];
		$user_id = $this->logedin['id'];
		
		$table = 'dashboard';
		$filter = array( 'user_id' => $user_id	);
		$get_data = $this->common_model->get_single($table, $filter);
		
		if($get_data == ""){
			$add_data = array(
				'user_id' => $user_id,
				'enable_cookie' => $enabled,
				'is_status' => 1,
				'created' => date('Y-m-d H:m:i'),
				'updated' => date('Y-m-d H:m:i')
			);
			$finaldata = $this->common_model->insert_data($table, $add_data);
		}else{
			$data = array(
				'enable_cookie' => $enabled,
				'updated' => date('Y-m-d H:m:i')
			);
			$finaldata = $this->common_model->update_data($table, $data, $filter);
		}
		
		print_r(json_encode($finaldata)); die;
    }
	
	function insert_setting_data()
	{
		$user_id = $this->logedin['id'];
		
		$table = 'general_setting';
		$filter = array( 'user_id' => $user_id	);
		$get_data = $this->common_model->get_single($table, $filter);
		
		if(isset($_POST['popup_setting'])){
			$popup_setting = $_POST['popup_setting'];
			if($get_data == ""){
				$add_data = array(
					'user_id' => $user_id,
					'popup_setting' => $popup_setting,
					'is_status' => 1,
					'created' => date('Y-m-d H:m:i'),
					'updated' => date('Y-m-d H:m:i')
				);
				$finaldata = $this->common_model->insert_data($table, $add_data);
			}else{
				$data = array(
					'popup_setting' => $popup_setting,
					'updated' => date('Y-m-d H:m:i')
				);
				$finaldata = $this->common_model->update_data($table, $data, $filter);
			}
		}

		if(isset($_POST['alignment'])){
			$alignment = $_POST['alignment'];
			if($get_data == ""){
				$add_data = array(
					'user_id' => $user_id,
					'alignment' => $alignment,
					'is_status' => 1,
					'created' => date('Y-m-d H:m:i'),
					'updated' => date('Y-m-d H:m:i')
				);
				$finaldata = $this->common_model->insert_data($table, $add_data);
			}else{
				$data = array(
					'alignment' => $alignment,
					'updated' => date('Y-m-d H:m:i')
				);
				$finaldata = $this->common_model->update_data($table, $data, $filter);
			}
		}
		
		print_r(json_encode($finaldata)); die;
    }
	
	function insert_first_setting()
	{
		$user_id = $this->logedin['id'];
		$table = 'general_setting';
		$filter = array( 'user_id' => $user_id	);
		$get_data = $this->common_model->get_single($table, $filter);
		
		//$showOnlyInEurope = (isset($_POST['showOnlyInEurope']))?$_POST['showOnlyInEurope']:"0";
		$message = $_POST['message'];
		$ok_btn_txt = $_POST['ok_btn_txt'];
		$deny_link_text = $_POST['deny_link_text'];
		$privacy_policy_url = $_POST['privacy_policy_url'];
		$info_link_text = $_POST['info_link_text'];
		//$decline_url_text = $_POST['decline_url_text'];
		$setting_link_text = $_POST['setting_link_text'];
		
		if($get_data == ""){
			$add_data = array(
				'user_id' => $user_id,
				//'in_europe' => $showOnlyInEurope,
				'message' => $message,
				'allow_button_text' => $ok_btn_txt,
				'cookie_policy_text' => $deny_link_text,
				'privacy_policy_url' => $privacy_policy_url,
				'deny_button_text' => $info_link_text,
				//'deny_button_url' => $decline_url_text,
				'setting_link_text' => $setting_link_text,
				'is_status' => 1,
				'created' => date('Y-m-d H:m:i'),
				'updated' => date('Y-m-d H:m:i')
			);
			$finaldata = $this->common_model->insert_data($table, $add_data);
			if($finaldata){
				$this->set_success("Popup setting data inserted successfully!");
			}else{
				$this->set_error("Popup setting data not inserted successfully!");
			}
		}else{
			$data = array(
				//'in_europe' => $showOnlyInEurope,
				'message' => $message,
				'allow_button_text' => $ok_btn_txt,
				'cookie_policy_text' => $deny_link_text,
				'privacy_policy_url' => $privacy_policy_url,
				'deny_button_text' => $info_link_text,
				//'deny_button_url' => $decline_url_text,
				'setting_link_text' => $setting_link_text,
				'updated' => date('Y-m-d H:m:i')
			);
			$finaldata = $this->common_model->update_data($table, $data, $filter);
			if($finaldata){
				$this->set_success("Popup setting data updated successfully!");
			}else{
				$this->set_error("Popup setting data not updated successfully!");
			}
		}
		
		redirect("home/setting");
    }
	
	function insert_layouts_setting()
	{
		$user_id = $this->logedin['id'];
		$table = 'layouts';
		$filter = array( 'user_id' => $user_id	);
		$get_data = $this->common_model->get_single($table, $filter);

		$banner_layout = $_POST['banner_layout'];
		$banner_font_size = $_POST['banner_font_size'];
		$banner_font_color = $_POST['banner_font_color'];
		$banner_back_color = $_POST['banner_back_color'];
		$banner_height = $_POST['banner_height'];
		$link_font_size = $_POST['link_font_size'];
		$link_font_color = $_POST['link_font_color'];
		$decline_link_font_size = $_POST['decline_link_font_size'];
		$decline_link_font_color = $_POST['decline_link_font_color'];
		$deny_enable = (isset($_POST['deny_enable']))?$_POST['deny_enable']:"0";
		$hideonclickdeny = (isset($_POST['hideonclickdeny']))?$_POST['hideonclickdeny']:"0";
		$button_font_size = $_POST['button_font_size'];
		$button_font_color = $_POST['button_font_color'];
		$button_back_color = $_POST['button_back_color'];
		$cookie_font_size = $_POST['cookie_font_size'];
		$cookie_fontcolor = $_POST['cookie_fontcolor'];
		$cookie_button_back_color = $_POST['cookie_button_back_color'];
		$iCookieExpireTime = $_POST['iCookieExpireTime'];

		if($get_data == ""){
			$add_data = array(
				'user_id' => $user_id,
				'layout_type' => $banner_layout,
				'banner_font_size' => $banner_font_size,
				'banner_font_color' => $banner_font_color,
				'banner_background_color' => $banner_back_color,
				'banner_height' => $banner_height,
				'link_font_size' => $link_font_size,
				'link_font_color' => $link_font_color,
				'deny_font_size' => $decline_link_font_size,
				'deny_font_color' => $decline_link_font_color,
				'enable_deny' => $deny_enable,
				'hide_banner' => $hideonclickdeny,
				'button_font_size' => $button_font_size,
				'button_font_color' => $button_font_color,
				'button_background_color' => $button_back_color,
				'option_button_font_size' => $cookie_font_size,
				'option_button_font_color' => $cookie_fontcolor,
				'option_button_background_color' => $cookie_button_back_color,
				'expiration_time' => $iCookieExpireTime,
				'is_status' => 1,
				'created' => date('Y-m-d H:m:i'),
				'updated' => date('Y-m-d H:m:i')
			);
			$finaldata = $this->common_model->insert_data($table, $add_data);
			if($finaldata){
				$this->set_success("Popup layout setting data inserted successfully!");
			}else{
				$this->set_error("Popup layout setting data not inserted successfully!");
			}
		}else{
			$data = array(
				'layout_type' => $banner_layout,
				'banner_font_size' => $banner_font_size,
				'banner_font_color' => $banner_font_color,
				'banner_background_color' => $banner_back_color,
				'banner_height' => $banner_height,
				'link_font_size' => $link_font_size,
				'link_font_color' => $link_font_color,
				'deny_font_size' => $decline_link_font_size,
				'deny_font_color' => $decline_link_font_color,
				'enable_deny' => $deny_enable,
				'hide_banner' => $hideonclickdeny,
				'button_font_size' => $button_font_size,
				'button_font_color' => $button_font_color,
				'button_background_color' => $button_back_color,
				'option_button_font_size' => $cookie_font_size,
				'option_button_font_color' => $cookie_fontcolor,
				'option_button_background_color' => $cookie_button_back_color,
				'expiration_time' => $iCookieExpireTime,
				'updated' => date('Y-m-d H:m:i')
			);
			$finaldata = $this->common_model->update_data($table, $data, $filter);
			if($finaldata){
				$this->set_success("Popup layout setting data updated successfully!");
			}else{
				$this->set_error("Popup layout setting data not updated successfully!");
			}
		}
		
		redirect("home/setting");
    }
	
	function advance_cookies_setting()
	{
		$user_id = $this->logedin['id'];
		$table = 'advance_setting';
		$filter = array( 'user_id' => $user_id	);
		$get_data = $this->common_model->get_single($table, $filter);
		
		$cookie_title_1 = $_POST['strictly_cookies'];
		$cookie_descrption_1 = $_POST['strictly_cookies_ans'];
		$cookie_title_2 = $_POST['basic_cookies'];
		$cookie_descrption_2 = $_POST['basic_cookies_ans'];
		$cookie_title_3 = $_POST['experience_cookies'];
		$cookie_descrption_3 = $_POST['experience_cookies_ans'];
		$cookie_title_4 = $_POST['measurement_cookies'];
		$cookie_descrption_4 = $_POST['measurement_cookies_ans'];
		$custom_css = $_POST['csscode'];
		$custom_js = $_POST['jscode'];
		
		if($get_data == ""){
			$add_data = array(
				'user_id' => $user_id,
				'cookie_title_1' => $cookie_title_1,
				'cookie_descrption_1' => $cookie_descrption_1,
				'cookie_title_2' => $cookie_title_2,
				'cookie_descrption_2' => $cookie_descrption_2,
				'cookie_title_3' => $cookie_title_3,
				'cookie_descrption_3' => $cookie_descrption_3,
				'cookie_title_4' => $cookie_title_4,
				'cookie_descrption_4' => $cookie_descrption_4,
				'custom_css' => $custom_css,
				'custom_js' => $custom_js,
				'is_status' => 1,
				'created' => date('Y-m-d H:m:i'),
				'updated' => date('Y-m-d H:m:i')
			);
			$finaldata = $this->common_model->insert_data($table, $add_data);
			if($finaldata){
				$this->set_success("Advance setting data inserted successfully!");
			}else{
				$this->set_error("Advance setting data not inserted successfully!");
			}
		}else{
			$data = array(
				'cookie_title_1' => $cookie_title_1,
				'cookie_descrption_1' => $cookie_descrption_1,
				'cookie_title_2' => $cookie_title_2,
				'cookie_descrption_2' => $cookie_descrption_2,
				'cookie_title_3' => $cookie_title_3,
				'cookie_descrption_3' => $cookie_descrption_3,
				'cookie_title_4' => $cookie_title_4,
				'cookie_descrption_4' => $cookie_descrption_4,
				'custom_css' => $custom_css,
				'custom_js' => $custom_js,
				'updated' => date('Y-m-d H:m:i')
			);
			$finaldata = $this->common_model->update_data($table, $data, $filter);
			if($finaldata){
				$this->set_success("Advance setting data updated successfully!");
			}else{
				$this->set_error("Advance setting data not updated successfully!");
			}
		}
		
		redirect("home/setting");
    }	
	
}
