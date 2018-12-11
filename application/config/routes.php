<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['links']         = 'links/showLinks';
$route['links/addLink'] = 'links/addLink';
$route['links/deleteLink']  = 'links/deleteLink';
$route['posts/(:any)']  = 'posts/view/$1';
$route['posts']         = 'posts/index';
$route['default_controller'] = 'pages/view';
$route['(:any)']        = 'pages/view/$1';
$route['404_override']  = '';
$route['translate_uri_dashes'] = FALSE;
