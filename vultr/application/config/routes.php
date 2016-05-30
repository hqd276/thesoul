<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "home";
$route['404_override'] = '';

$route['team'] = "member";

$route['user'] = "user";
$route['login'] = "user/login";
$route['register'] = "user/register";
$route['logout'] = "user/logout";

$route['news'] = "news";
$route['news/list/(:num)'] = "news/index/$1";
$route['news/list/(:num)/(:num)'] = "news/index/$1/$2";

$route['detail/(:any)'] = "news/detail_t/$1";

$route['service/(:any)'] = "news/index_t/3/$1";
$route['project/(:any)'] = "project/index_t/$1";

$route['dat-hang'] = "booking";
$route['lien-he'] = "contact";
$route['ve-chung-toi'] = "about";
$route['tin-tuc'] = "news";
$route['tin-tuc/(:any)'] = "news/index/0/$1";
$route['thu-vien-anh'] = "gallery";

$route['chi-tiet-tin/(:any)'] = "news/detail_t/$1";

$route['danh-muc-san-pham'] = "product/index_t";
$route['danh-muc-san-pham/(:any)'] = "product/index_t/$1";
$route['danh-muc-san-pham/(:any)/(:any)'] = "product/index_t/$1/$2";
$route['chi-tiet-san-pham/(:any)'] = "product/detail_t/$1";

$route['admin'] = "admin";
// $route['list-support'] = "admin/support";
// $route['list-booking'] = "admin/booking";

$route['list-category/(:num)'] = "admin/category/index/$1";
$route['add-category/(:num)'] = "admin/category/add/$1";
$route['edit-category/(:num)/(:num)'] = "admin/category/edit/$1/$2";

$route['list-news/(:num)'] = "admin/news/index/$1";
$route['add-news/(:num)'] = "admin/news/add/$1";
$route['edit-news/(:num)/(:num)'] = "admin/news/edit/$1/$2";

// $route['list-gallery'] = "admin/gallery/index";
// $route['add-gallery'] = "admin/gallery/add";

// $route['setting'] = "admin/setting";
$route['edit-setting/(:num)'] = "admin/setting/edit/$1";

$route['header'] = "header";

/* End of file routes.php */
/* Location: ./application/config/routes.php */