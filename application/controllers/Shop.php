<?php defined('BASEPATH') or exit('No Direct Scrept Allowed!');

class Shop extends MX_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	
	function redact()
	{
		if(isset($_SERVER['HTTP_X_SHOPIFY_HMAC_SHA256']) && $_SERVER['HTTP_X_SHOPIFY_HMAC_SHA256'] != ""){

			$hmac_header = $_SERVER['HTTP_X_SHOPIFY_HMAC_SHA256'];
			$data = file_get_contents('php://input');
			$verified = $this->verify_webhook($data, $hmac_header);

			if ($verified) {
				return true;
			} else {
				http_response_code(401);
			}
		}else{
			http_response_code(400);
		}
	}
	
	function verify_webhook($data, $hmac_header)
	{
		$calculated_hmac = base64_encode(hash_hmac('sha256', $data, $this->config->item('shopify_secret'), true));
		return hash_equals($hmac_header, $calculated_hmac);
	}
	
}	
	
?>