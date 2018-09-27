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
$route['login_adm']='auth/login_admin';

// ADMIN

// HOME
$route['tentang'] = 'home/tentang';

// USER
$route['myprofile'] = 'user/myprofile';
$route['history'] = 'user/index';
$route['upload']='user/upload';
$route['profile']='user/inputprofile';

