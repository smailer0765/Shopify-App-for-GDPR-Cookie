<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MX_Controller {

    
    public function __construct()
    {
        parent::__construct();
    }
    
    public function access($shop = "")
	{
		$this->load->library('session');
		$this->logedin = $this->session->userdata("logedin");
		
		if($this->logedin != "")
		{
			redirect("home");exit;
		}
			
		$loginshop = "";
		if($shop != ""){
			$loginshop = $shop;
		}elseif(isset($_POST['shop'])){
			$shop = $_POST['shop'];
		}elseif(isset($_GET['shop'])){
			$shop = $_GET['shop'];
		}
		
		$table 	= 'users';
		$filter = array('site_url' => $shop, 'is_status' => 1, 'is_deleted' => 0);
		$data = $this->common_model->get_single($table, $filter);
		
		$errors = "";$err = "";
		if($data != false){
			$accessToken = "";
			if($data['user_key'] != "" && $data['user_key'] != NULL ){
				$accessToken = $data['user_key'];
				$curl = curl_init();
				curl_setopt_array($curl, array(
					CURLOPT_URL => "https://".$shop."/admin/api/2022-07/shop.json",
					CURLOPT_RETURNTRANSFER => true,
					CURLOPT_ENCODING => "",
					CURLOPT_MAXREDIRS => 10,
					CURLOPT_TIMEOUT => 30,
					CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
					CURLOPT_CUSTOMREQUEST => "GET",
					CURLOPT_HTTPHEADER => array( "x-shopify-access-token: $accessToken" ),
				));
				$response = json_decode(curl_exec($curl));
				if(isset($response->errors)){
					$errors = $response->errors;
				}
				$err = curl_error($curl);
				curl_close($curl);
			}
		}
		
		if( ($err == "" && $errors == "" && $data != false) ){
			if(isset($_GET['hmac']) && $_GET['hmac'] != ""){
				if(isset($_GET['locale']) && $_GET['locale'] != ""){
					redirect("app_home/dashboard/".$_GET['shop']);
				}else{
					redirect("https://".$shop."/admin/apps/advanced-gdpr-eu-cookie-bar");
				}
			}else if($data != false && $loginshop != ""){
				redirect("https://".$shop."/admin/apps/advanced-gdpr-eu-cookie-bar");
			}else{
				unset($data['password']);
				$data['check_user'] = "user";
				$this->session->set_userdata("logedin", $data);
				redirect("home");
			}
        }else{
			$this->auth($shop."/");
		}
    } 
	
    public function auth($shop)
	{		
        $data = array(
            'API_KEY' => $this->config->item('shopify_api_key'),
            'API_SECRET' => $this->config->item('shopify_secret'),
            'SHOP_DOMAIN' => $shop,
            'ACCESS_TOKEN' => ''
        );
        $this->load->library('Shopify' , $data); //load shopify library and pass values in constructor

        $scopes = array('read_script_tags','write_script_tags','read_customers','write_customers'); //what app can do
		
        $redirect_url = $this->config->item('redirect_url'); //redirect url specified in app setting at shopify
        $paramsforInstallURL = array(
            'scopes' => $scopes,
            'redirect' => $redirect_url
        );
        $permission_url = $this->shopify->installURL($paramsforInstallURL);
        $this->load->view('auth/escapeIframe', ['installUrl' => $permission_url]);
    }

    public function authCallback(){
        $code = $this->input->get('code');
        $shop = $this->input->get('shop');
		
        if(isset($code)){
            $data = array(
                'API_KEY' => $this->config->item('shopify_api_key'),
                'API_SECRET' => $this->config->item('shopify_secret'),
                'SHOP_DOMAIN' => $shop,
                'ACCESS_TOKEN' => ''
            );
            $this->load->library('Shopify' , $data); //load shopify library and pass values in constructor
        }

        $accessToken = $this->shopify->getAccessToken($code);
		
		$table 	= 'users';
		$filter = array('site_url' => $shop, 'is_status' => 1, 'is_deleted' => 0);
		$data = $this->common_model->get_single($table, $filter);
	
		if($data == false){
			$username = ucfirst(explode(".myshopify.com",$shop)[0]). " Admin";
			$data['full_name']  	= $username;
			$data['domain_name']	= "https://".$shop."/";
			$data['site_url']		= $shop;
			$data['is_status']		= 1;
			$data['is_deleted']    	= 0;
			$data['created'] 		= date('Y-m-d H:i:s');
			$data['updated'] 		= date('Y-m-d H:i:s');
			
			$flag = $this->common_model->insert_data($table, $data);
			if($flag != false){
				
				$d_table = 'dashboard';
				$d_filter = array('user_id' => $flag, 'is_status' => 1);
				$d_data = $this->common_model->get_single($d_table, $d_filter);
				
				if($d_data == false){
					$d_data['user_id']		= $flag;
					$d_data['enable_cookie']= 0;
					$d_data['is_status']	= 1;
					$d_data['created'] 		= date('Y-m-d H:i:s');
					$d_data['updated'] 		= date('Y-m-d H:i:s');
				}
				$d_flag = $this->common_model->insert_data($d_table, $d_data);
				
				$g_table = 'general_setting';
				$g_filter = array('user_id' => $flag, 'is_status' => 1);
				$g_data = $this->common_model->get_single($g_table, $g_filter);
				if($g_data == false){
					$g_data['user_id'] = $flag;
					$g_data['popup_setting'] = "popup";
					$g_data['alignment'] = "";
					$g_data['in_europe'] = 0;
					$g_data['message'] = "We use cookies to help improve our services, make personal offers, and enhance your experience. If you do not accept the optional cookies below, your experience may be affected.";
					$g_data['allow_button_text'] = "Allow Cookies";
					$g_data['cookie_policy_text'] = "Cookie Policy";
					$g_data['privacy_policy_url'] = "https://".$shop."/privacy-page";
					$g_data['deny_button_text'] = "Deny";
					$g_data['deny_button_url'] = "https://".$shop."/";
					$g_data['setting_link_text'] = "Custom Settings";
					$g_data['is_status'] = 1;
					$g_data['created'] = date('Y-m-d H:i:s');
					$g_data['updated'] = date('Y-m-d H:i:s');
				}
				$g_data = $this->common_model->insert_data($g_table, $g_data);
			}
			$this->add_script($shop, $accessToken);
		}else{
			if( $data['user_key'] != $accessToken ){
				$this->add_script($shop, $accessToken);
			}
		}
		
		$data = $this->common_model->get_single($table, $filter);

		if($accessToken != ""){
			$this->common_model->update_data('users', array('user_key' => $accessToken), $filter);
		}
		
		redirect('auth/access/'.$shop);
		
    }

	public function add_script($shop = "", $accessToken = ""){
	
		if($shop != "" && $accessToken != ""){
			
			$url = "https://".$shop."/admin/api/2022-07/script_tags.json";

			$curl = curl_init();
			curl_setopt_array($curl, array(
				CURLOPT_URL => $url,
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_ENCODING => "",
				CURLOPT_MAXREDIRS => 10,
				CURLOPT_TIMEOUT => 30,
				CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST => "POST",
				CURLOPT_POSTFIELDS => "{\"script_tag\":{\"event\":\"onload\",\"src\":\"https://gdpr-cookie-app.stagebit.com/assets/js/app.min.js\"}}",
				CURLOPT_HTTPHEADER => array(
					"content-type: application/json",
					"x-shopify-access-token: $accessToken"
				),
			));

			$response = curl_exec($curl);
			$err = curl_error($curl);
			curl_close($curl);
		}
	}
	
}