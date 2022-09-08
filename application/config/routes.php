<?php
defined('BASEPATH') OR exit('No direct script access allowed');




//MY ROUTE ON LOGIN
$route['default_controller'] = 'Log_controller/selectdpt';

$route['employee'] = 'Log_controller/employees';

//$route['loginUser/(:any)/(:any)'] = 'Login_controller/authenticate2/$1/$2';


//DASHBOARD
$route['dashboard'] = 'Dashboard_controller/dashboard';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
