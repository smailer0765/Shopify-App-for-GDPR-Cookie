<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'auth/access';
$route['404_override'] = 'custom404';
$route['translate_uri_dashes'] = FALSE;

$route['admin'] = 'Admin';
$route['admin/(:any)'] = 'Admin/$1';
$route['admin/(:any)/(:any)'] = 'Admin/$1/$2';
$route['admin/(:any)/(:any)/(:any)'] = 'Admin/$1/$2/$3';

$route['app_cookies'] = 'App_cookies';
$route['app_cookies/(:any)'] = 'App_cookies/$1';
$route['app_cookies/(:any)/(:any)'] = 'App_cookies/$1/$2';
$route['app_cookies/(:any)/(:any)/(:any)'] = 'App_cookies/$1/$2/$3';

$route['app_cookies_group'] = 'App_cookies_group';
$route['app_cookies_group/(:any)'] = 'App_cookies_group/$1';
$route['app_cookies_group/(:any)/(:any)'] = 'App_cookies_group/$1/$2';
$route['app_cookies_group/(:any)/(:any)/(:any)'] = 'App_cookies_group/$1/$2/$3';

$route['app_home'] = 'App_home';
$route['app_home/(:any)'] = 'App_home/$1';
$route['app_home/(:any)/(:any)'] = 'App_home/$1/$2';
$route['app_home/(:any)/(:any)/(:any)'] = 'App_home/$1/$2/$3';

$route['auth'] = 'Auth';
$route['auth/(:any)'] = 'Auth/$1';
$route['auth/(:any)/(:any)'] = 'Auth/$1/$2';
$route['auth/(:any)/(:any)/(:any)'] = 'Auth/$1/$2/$3';

$route['banner'] = 'Banner';
$route['banner/(:any)'] = 'Banner/$1';
$route['banner/(:any)/(:any)'] = 'Banner/$1/$2';
$route['banner/(:any)/(:any)/(:any)'] = 'Banner/$1/$2/$3';

$route['cookies'] = 'Cookies';
$route['cookies/(:any)'] = 'Cookies/$1';
$route['cookies/(:any)/(:any)'] = 'Cookies/$1/$2';
$route['cookies/(:any)/(:any)/(:any)'] = 'Cookies/$1/$2/$3';

$route['cookies_group'] = 'Cookies_group';
$route['cookies_group/(:any)'] = 'Cookies_group/$1';
$route['cookies_group/(:any)/(:any)'] = 'Cookies_group/$1/$2';
$route['cookies_group/(:any)/(:any)/(:any)'] = 'Cookies_group/$1/$2/$3';

$route['customers'] = 'Customers';
$route['customers/(:any)'] = 'Customers/$1';
$route['customers/(:any)/(:any)'] = 'Customers/$1/$2';
$route['customers/(:any)/(:any)/(:any)'] = 'Customers/$1/$2/$3';

$route['home'] = 'Home';
$route['home/(:any)'] = 'Home/$1';
$route['home/(:any)/(:any)'] = 'Home/$1/$2';
$route['home/(:any)/(:any)/(:any)'] = 'Home/$1/$2/$3';

$route['shop'] = 'Shop';
$route['shop/(:any)'] = 'Shop/$1';
$route['shop/(:any)/(:any)'] = 'Shop/$1/$2';
$route['shop/(:any)/(:any)/(:any)'] = 'Shop/$1/$2/$3';

$route['user_login'] = 'User_login';
$route['user_login/(:any)'] = 'User_login/$1';
$route['user_login/(:any)/(:any)'] = 'User_login/$1/$2';
$route['user_login/(:any)/(:any)/(:any)'] = 'User_login/$1/$2/$3';

