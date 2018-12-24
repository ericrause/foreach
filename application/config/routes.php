<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['profile']           = 'Pages/showProfile';
$route['Signup']            = 'Auth/showSignUp';
$route['login']             = 'Auth/showLogin';
$route['logout']            = 'Auth/logout';
$route['links']             = 'Links/showLinks';
$route['links/addLink']     = 'Links/addLink';
$route['links/deleteLink']  = 'Links/deleteLink';
$route['links/editLink']    = 'Links/editLink';
$route['posts/viewSource/(:any)'] = 'Posts/viewSource/$1';
$route['posts/(:any)']      = 'Posts/index';
$route['posts']             = 'Posts/index';
$route['parser']            = 'Parser/index';
$route['default_controller'] = 'Pages/view';
$route['(:any)']            = 'Pages/view/$1';
$route['404_override']      = '';
$route['translate_uri_dashes'] = FALSE;
