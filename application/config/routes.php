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
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'app';
// $route['blog/view/post/(:any)'] = 'blog/view/$1';
// $route['blog/comment/(:any)/(:num)'] = 'blog/comment/$2/$1';
// $route['blog/category/cat/(:any)/(:num)'] = 'blog/category/$2/$1';
// $route['blog/search/tag/(:any)/(:num)'] = 'blog/search/$2/$1';
// $route['blog'] = 'blog/index';
// $route['online-tuition'] = 'online_tuition';
// $route['online-tuition/book_class'] = 'online_tuition/book_class';
// $route['online-tuition/(:any)'] = 'online_tuition/subpage/$1';
// $route['blog/(:any)'] = 'blog/view/$1';
// $route['courses/(:any)'] = 'courses/course_single/$1';
// $route['about'] = 'home/about';
// $route['contact'] = 'home/contact';
// $route['downloads'] = 'home/downloads';
// $route['courses'] = 'courses/index';
// $route['careers'] = 'careers/index';
// $route['admin'] = 'admin/index';
// $route['joinus'] = 'trainer/index';
// $route['media'] = 'home/media';
// $route['franchise'] = 'home/franchise';
// $route['login_check'] = 'app/login_check';
// $route['suggest'] = 'home/suggest';
// $route['jee_trainers'] = 'home/jee_trainers';
// $route['internship'] = 'home/internship';
// $route['keam_neet_trainers'] = 'home/keam_neet_trainers';
// $route['vcamp'] = 'registration/vcamp';
// $route['euphoria'] = 'registration/euphoria';
// $route['webinar'] = 'registration/webinar';
// $route['shecamp'] = 'registration/shecamp';
// $route['svcamp'] = 'registration/svcamp';
// $route['parenting'] = 'registration/parenting';
// $route['hrinterns'] = 'home/hrinterns';
// $route['domupdation'] = 'home/domupdation';
// $route['maintenance'] = 'home/under_construction';
// // $route['(:any)'] = 'home';
// $route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
