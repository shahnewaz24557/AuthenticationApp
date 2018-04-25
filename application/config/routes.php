<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'HomeController/index';

$route['login'] = 'HomeController/login';
$route['check_user'] = 'HomeController/check_user';

$route['logout'] = 'HomeController/logout';

$route['signup'] = 'HomeController/signup';
$route['registration'] = 'HomeController/registration';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
