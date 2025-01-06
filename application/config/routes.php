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


//reporting 
$route['admin/reporting_officer_list'] = 'admin/reporting_officers/list_all'; // Admin view all reporting officers
$route['admin/reporting_officers/add'] = 'admin/reporting_officers/add_officer';  // Admin add reporting officer
$route['admin/reporting_officers/view/(:any)'] = 'admin/reporting_officers/view_officer/$1'; // Admin view officer
$route['admin/reporting_officers/edit/(:any)'] = 'admin/reporting_officers/update_officer/$1'; // Admin edit officer
$route['admin/reporting_officers/delete/(:any)'] = 'admin/reporting_officers/delete_officer/$1'; // Admin delete officer
