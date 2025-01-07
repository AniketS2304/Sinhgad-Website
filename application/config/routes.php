<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// In application/config/routes.php
// $route['default_controller'] = 'Welcome';
// $route['login'] = 'login';
// $route['admin_dashboard'] = 'admin_dashboard';
// $route['404_override'] = '';
// $route['translate_uri_dashes'] = FALSE;
// $route['dashboard/manage_employees'] = 'dashboard/manage_employees';


// $route['default_controller'] = 'admin/login'; // Default controller should be the login page.
// $route['admin/login'] = 'admin/login'; // Route for login page.
// $route['admin/login_process'] = 'admin/login_process'; // Route for processing login.
// $route['admin/dashboard'] = 'admin/dashboard'; // Route to the admin dashboard.
// $route['admin/logout'] = 'admin/logout'; // Route for logout.

// $route['dashboard'] = 'admin/dashboard'; // Redirect for dashboard.
$route['default_controller'] = 'login';  // Default controller should load the login page
$route['login'] = 'login';  // login page route
$route['login/validate'] = 'login/validate';  // form submission for login
$route['admin/dashboard'] = 'AdminDashboard/index';  // Dashboard page route
$route['login/logout'] = 'login/logout';  // logout route


// Reporting Officers Routes
$route['admin/reporting_officer_list'] = 'AdminDashboard/list_all'; // Admin view all reporting officers
$route['admin/reporting_officers/add'] = 'AdminDashboard/add_reporting_officer_form'; // Admin add reporting officer form
$route['admin/reporting_officers/view/(:any)'] = 'AdminDashboard/view_officer/$1'; // Admin view officer
$route['admin/reporting_officers/edit/(:any)'] = 'AdminDashboard/update_officer/$1'; // Admin edit officer
$route['admin/reporting_officers/delete/(:any)'] = 'AdminDashboard/delete_officer/$1'; // Admin delete officer


//reporting officers

// Reporting Officer Routes
// Reporting Officer Routes
// $route['default_controller'] = 'ReportingOfficers/dashboard';

$route['reporting_officer/dashboard'] = 'ReportingOfficers/dashboard';
$route['reporting_officer/profile/(:num)'] = 'ReportingOfficers/profile/$1';
$route['reporting_officer/update/(:num)'] = 'ReportingOfficers/update/$1';
$route['reporting_officer/change_password/(:num)'] = 'ReportingOfficers/change_password/$1';
