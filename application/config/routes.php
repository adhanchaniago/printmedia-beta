<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// AUTH
$route['login'] = 'auth/login';
$route['register'] = 'auth/register';
$route['logout'] = 'auth/logout';
$route['sukses'] = 'auth/sukses';
//$route['aktivasi'] = 'auth/aktivasi';
$route['aktivasi/(:any)'] = 'auth/aktivasi/$1';

// ADMIN

// HOME
$route['tentang'] = 'home/tentang';

// USER
