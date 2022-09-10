<?php defined('BASEPATH') or exit('No Direct Scrept Allowed!');

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, OPTIONS");

class Banner extends MX_Controller
{
	public $data, $logedin, $error, $success;
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
	
	function index()
	{
		if($this->logedin != ""){
            redirect("home");
		}
		$this->load->view("no_access");
	}
	
	function GetCookieData()
	{
		$data = array();
		if(isset($_POST['cookie_shop_url']) && $_POST['cookie_shop_url'] != ""){
			$user = $this->common_model->get_single('users', array('site_url'=>$_POST['cookie_shop_url']));
			$filter = array( 'user_id' => $user['id'], 'is_enabled' => "Yes" );
			$cookies = $this->common_model->get_by_condition('cookies', $filter);
			foreach($cookies as $cookie){
				$key = $cookie['cookie_name'];
				$value = md5($cookie['cookie_lifetime']);
				$data[$key] = $value;
			}
		}
		print_r(json_encode($data));die;
	}
	
	function getBannerAjax()
	{
		$data = array();
		if(isset($_POST['shop_url']) && $_POST['shop_url'] != ""){
		
			$user = $this->common_model->get_single('users', array('site_url'=>$_POST['shop_url']));
			
			$filter = array( 'user_id' => $user['id'] );
			$row = $this->common_model->get_single('dashboard', $filter);
			$setting_data = $this->common_model->get_single('general_setting', $filter);
			//$layout_data = $this->common_model->get_single('layouts', $filter);
			//$advance_data = $this->common_model->get_single('advance_setting', $filter);
			
			$data['banner_data'] = array(
				"shop_id" => $row['user_id'],
				"eBannerEnable" => $row['enable_cookie'],
				"showOnlyInEurope" => $setting_data['in_europe'],
				"vMessage" => $setting_data['message'],
				"vOkBtnText" => $setting_data['allow_button_text'],
				"vInfoLinkText" => $setting_data['cookie_policy_text'],
				"vPrivacyPolicyUrl" => $setting_data['privacy_policy_url'],
				"alignment_text" => $setting_data['alignment'],
				"setting_link_text" => $setting_data['setting_link_text'],
				"deny_text" => $setting_data['deny_button_text'],
				"deny_link" => $setting_data['deny_button_url'],
				"vButtonBorderColor" => "",
				"store_front_html" => '<div data-role="gdpr-cookie-container" class="amgdprcookie-bar-template -popup _show" data-bind=""><div role="alertdialog" tabindex="-1" class="amgdprcookie-bar-container" data-amcookie-js="bar" data-bind=""><div class="amgdprcookie-bar-block"><p class="amgdprcookie-policy" data-bind="html: policyText">'.$setting_data['message'].' If you want to know more, please read the <a href="'.$setting_data['privacy_policy_url'].'" title="Cookie Policy" target="_blank">'.$setting_data['cookie_policy_text'].'</a></p><div class="amgdprcookie-buttons-block"><button class="amgdprcookie-button -allow" title="Accept Cookies" id="allow_setting"  aria-label="Accept Cookies">'.$setting_data['allow_button_text'].'</button><button class="amgdprcookie-button -deny" title="Deny Cookies" id="deny_setting" aria-label="Deny Cookies">'.$setting_data['deny_button_text'].'</button><button class="amgdprcookie-button -settings" id="custom_setting" title="Custom Settings" aria-label="Custom Settings">'.$setting_data['setting_link_text'].'</button></div></div></div></div><div id="add_overlay_cookie" class="modals-overlay" style="display:block;"></div>',
				"front_css_link_setting" => "https://ruhifashion.bulltheme.com/cookies_admin/assets/css/gdpr-cookie.css?".rand(0,999),
				"created_at" => "2022-06-10 16:08:05",
				"cookie_mode" => "info",
				"accept" => "Accept",
				"customize_button_text" => "Customize",
				"count" => "0",
				"popup_setting" => $setting_data['popup_setting'],
				"popup_alignment" => "",
				"banner_layout" => "",
				"banner_font_size" => "",
				"banner_back_color" => "",
				"banner_font_color" => "",
				"link_font_size" => "",
				"link_font_color" => "",
				"decline_link_font_color" => "",
				"button_font_size" => "",
				"button_font_color" => "",
				"button_back_color" => "",
				"decline" => "Decline",
				"custom_accept" => "0",
				"custom_decline" => "0",
				"save_all" => "Save All",
				"delete_all" => "Delete All"
			);
			
			$data['eu_countries'] = array(
				"AT"=>"Austria",
				"BE"=>"Belgium",
				"BG"=>"Bulgaria",
				"HR"=>"Croatia",
				"CY"=>"Cyprus",
				"CZ"=>"Czech Republic",
				"DK"=>"Denmark",
				"EE"=>"Estonia",
				"FI"=>"Finland",
				"FR"=>"France",
				"DE"=>"Germany",
				"GR"=>"Greece",
				"HU"=>"Hungary",
				"IE"=>"Ireland",
				"IT"=>"Italy",
				"LV"=>"Latvia",
				"LT"=>"Lithuania",
				"LU"=>"Luxembourg",
				"MT"=>"Malta",
				"NL"=>"Netherlands",
				"PL"=>"Poland",
				"PT"=>"Portugal",
				"RO"=>"Romania",
				"SK"=>"Slovakia",
				"SI"=>"Slovenia",
				"ES"=>"Spain",
				"SE"=>"Sweden"
			);
		}
		
		print_r(json_encode($data));die;
	}

	
	function GetCookiePopup(){
		
		$data = array();
		if(isset($_POST['shop_url']) && $_POST['shop_url'] != ""){
			
			$user = $this->common_model->get_single('users', array('site_url'=>$_POST['shop_url']));
			
			$filter = array( 'user_id' => $user['id'], "is_enabled" => "Yes" );
			$cookie_groups = $this->common_model->get_by_condition('cookie_groups', $filter, array("sort_order", "asc"));
			
			$data['html'] = '<aside role="dialog" class="modal-popup amgdprcookie-groups-modal gdpr-cookie-container_setup-modal _show" aria-describedby="modal-content-31" data-role="modal" data-type="popup" tabindex="0"><div data-role="focusable-start" tabindex="0"></div><div class="modal-inner-wrap"><header class="modal-header"><button class="action-close" type="button"><span>Schließen</span></button></header><div id="modal-content-31" class="modal-content"><div data-bind="css: modalClass, hasFocus: focused" class="modal-component"><p class="amgdprcookie-description">Please select and accept your Cookies Group</p><div class="amgdprcookie-main-wrapper"><div class="amgdprcookie-form-container">';
			
			foreach($cookie_groups as $group){
				$text = "";
				if($group['is_essential'] == "Yes"){$text = "disabled checked";}
				$data['html'] .= '<div class="amgdprcookie-cookie-container"><div class="amgdprcookie-header"><h3 class="amgdprcookie-caption" data-bind="text: name">'.$group['group_name'].'</h3><div class="amgdprcookie-toggle-cookie"><input class="amgdprcookie-input" type="checkbox" data-amcookie-js="field" name="groups[]" value="1" id="switchBox-'.$group['sr_no'].'" '.$text.'><label class="amgdprcookie-label" for="switchBox-'.$group['sr_no'].'"></label></div></div><p class="amgdprcookie-text">'.$group['group_description'].'</p><span class="amgdprcookie-options" data-groupid="'.$group['sr_no'].'" data-title="'.$group['group_name'].'" data-description="'.$group['group_description'].'">More Information</span></div>';
			}
			
			$data['html'] .= '</div><div class="amgdprcookie-buttons-block -settings"><button class="amgdprcookie-done">Accept All</button></div></div></div></div></div><div data-role="focusable-end" tabindex="0"></div></aside><div id="add_overlay_setting" class="modals-overlay"></div>
			<aside role="dialog" class="modal-popup amgdprcookie-groups-modal -table gdpr-cookie-container_cookie-table1 modal-content-32" aria-labelledby="modal-title-32" aria-describedby="modal-content-32" data-role="modal" data-type="popup" tabindex="0" style="z-index: 903;"><div data-role="focusable-start" tabindex="0"></div><div class="modal-inner-wrap" data-role="focusable-scope" id="final_cookie_popup"></div><div data-role="focusable-end" tabindex="0"></div></aside><div id="add_overlay_table" class=""></div>';
		}
		
		print_r(json_encode($data));die;
	}
	
	
	function GetInfoPopup()
	{
		$data = array();
		if(isset($_POST['shop_url']) && $_POST['shop_url'] != ""){
			
			$user = $this->common_model->get_single('users', array('site_url'=>$_POST['shop_url']));
			
			$filter = array( 'cookie_group' => $_POST['title'], 'user_id' => $user['id'], 'is_enabled' => "Yes" );
			$cookies = $this->common_model->get_by_condition('cookies', $filter);
			
			$data['html'] = '<header class="modal-header">
						<h1 id="modal-title-32" class="modal-title" data-role="title">'.$_POST['title'].'</h1>
					</header>
					<div id="modal-content-32" class="modal-content" data-role="content">
						<div data-bind="css: modalClass, hasFocus: focused" class="modal-component">
							<p class="amgdprcookie-description">'.$_POST['description'].'</p>
							<table class="amgdprcookie-table">
								<thead>
									<tr>
										<th class="amgdprcookie-title">Cookie Name</th>
										<th class="amgdprcookie-title">Cookie Provider</th>
										<th class="amgdprcookie-title -wide">Cookie Description</th>
										<th class="amgdprcookie-title">Cookie Lifetime</th>
										<th class="amgdprcookie-title">Cookie Type</th>
									</tr>
								</thead>
								<tbody class="amgdprcookie-tbody">';
								foreach($cookies as $cookie){
									$data['html'] .= '<tr class="amgdprcookie-row">
										<td class="amgdprcookie-cell -name">'.$cookie['cookie_name'].'</td>
										<td class="amgdprcookie-cell">'.$cookie['cookie_provider'].'</td>
										<td class="amgdprcookie-cell desc">'.$cookie['cookie_description'].'</td>
										<td class="amgdprcookie-cell -lifetime">'.$cookie['cookie_lifetime'].'</td>
										<td class="amgdprcookie-cell">'.$cookie['cookie_type'].'</td>
									</tr>';
								}
							$data['html'] .= '</tbody>
							</table>
						</div>
					</div>
					<footer class="modal-footer">
						<button class="amgdprcookie-done" type="button" data-role="action"><span>Accept All</span></button>
					</footer>';
		}
		
		print_r(json_encode($data));die;
	}
	
}	
	
?>