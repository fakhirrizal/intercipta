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
| example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
| https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
| $route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
| $route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
| $route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples: my-controller/index -> my_controller/index
|   my-controller/my-method -> my_controller/my_method
*/
$route['default_controller'] = 'Welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;

$route['auth/login'] = 'auth/Login';
$route['auth/register'] = 'auth/Register';
$route['auth/username_check'] = 'auth/Username_check';
$route['auth/change_password'] = 'auth/Change_password';

/* Admin */
$route['admin/user_data'] = 'admin/User_data';
$route['admin/outlet'] = 'admin/Outlet';
$route['admin/delete_outlet'] = 'admin/Delete_outlet';
$route['admin/region'] = 'admin/Region';
$route['admin/delete_region'] = 'admin/Delete_region';
$route['admin/shift'] = 'admin/Shift';
$route['admin/delete_shift'] = 'admin/Delete_shift';
$route['admin/project'] = 'admin/Project';
$route['admin/delete_project'] = 'admin/Delete_project';
$route['admin/project_region'] = 'admin/Project_region';
$route['admin/user_location'] = 'admin/User_location';

/* Team Leader */
$route['team_leader/absent'] = 'team_leader/Check_in';
$route['team_leader/absent_done'] = 'team_leader/Absent_done';
$route['team_leader/status_absen'] = 'team_leader/Absent_status';
$route['team_leader/report'] = 'team_leader/Report';
$route['team_leader/absent_check'] = 'team_leader/Absent_check';
$route['team_leader/report_competitor'] = 'team_leader/Report_competitor';
$route['team_leader/delete_report_competitor'] = 'team_leader/Delete_report_competitor';

/* PIC */
$route['pic/project'] = 'pic/Project';
$route['pic/project_region'] = 'pic/Project_region';
$route['pic/delete_project_region'] = 'pic/Delete_project_region';
$route['pic/outlet'] = 'pic/Outlet';
$route['pic/outlet2'] = 'pic/Outlet2';
$route['pic/team_leader'] = 'pic/Team_leader';
$route['pic/fl_to_outlet'] = 'pic/Fl_to_outlet';
$route['pic/pic/delete_fl_to_outlet'] = 'pic/pic/Delete_fl_to_outlet';
$route['pic/penjualan'] = 'pic/Selling';
$route['pic/penjualan_hari_ini'] = 'pic/Selling_today';
$route['pic/penjualan_bulan_ini'] = 'pic/Selling_this_month';
$route['pic/project_region_to_outlet'] = 'pic/Project_region_to_outlet';

/* Front Liner */
$route['front_liner/absent'] = 'front_liner/Check_in';
$route['front_liner/absent_done'] = 'front_liner/Absent_done';
$route['front_liner/status_absen'] = 'front_liner/Absent_status';
$route['front_liner/report'] = 'front_liner/Report';
$route['front_liner/delete_report'] = 'front_liner/Delete_report';

$route['front_liner/report_competitor'] = 'front_liner/Report_competitor';
$route['front_liner/delete_report_competitor'] = 'front_liner/Delete_report_competitor';
$route['front_liner/location'] = 'front_liner/Location';

/* Non Front Liner */
$route['non_front_liner/absent'] = 'non_front_liner/Check_in';
$route['non_front_liner/absent_done'] = 'non_front_liner/Absent_done';

/* Client */
$route['client/project'] = 'client/Project';
$route['client/report_tl'] = 'client/Report_tl';
$route['client/report_competitor_tl'] = 'client/Report_competitor_tl';

/*
| -------------------------------------------------------------------------
| Sample REST API Routes
| -------------------------------------------------------------------------
*/
$route['api/example/users/(:num)'] = 'api/example/users/id/$1'; // Example 4
$route['api/example/users/(:num)(\.)([a-zA-Z0-9_-]+)(.*)'] = 'api/example/users/id/$1/format/$3$4'; // Example 8