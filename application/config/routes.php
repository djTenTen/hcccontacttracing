<?php
defined('BASEPATH') OR exit('No direct script access allowed');




//MY ROUTE ON LOGIN
$route['default_controller'] = 'Log_controller/selectdpt';

$route['employee'] = 'Log_controller/employees';
$route['logemployee'] = 'Log_controller/logemployee';

$route['college'] = 'Log_controller/college';
$route['logstudentcollege'] = 'Log_controller/logstudentcollege';

$route['shs'] = 'Log_controller/seniorhigh';
$route['logstudentseniorhigh'] = 'Log_controller/logstudentseniorhigh';

$route['jhs'] = 'Log_controller/juniorhigh';
$route['logstudentjuniorhigh'] = 'Log_controller/logstudentjuniorhigh';

$route['gs'] = 'Log_controller/gradeschool';
$route['logstudentgradeschool'] = 'Log_controller/logstudentgradeschool';


//$route['loginUser/(:any)/(:any)'] = 'Login_controller/authenticate2/$1/$2';


//DASHBOARD
$route['dashboard'] = 'Dashboard_controller/dashboard';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
