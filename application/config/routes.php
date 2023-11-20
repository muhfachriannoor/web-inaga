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
$route['default_controller'] = 'frontend/home';
// $route['404_override'] = 'error_404/index';
$route['translate_uri_dashes'] = FALSE;

//LOGIN
$route['login/'] = 'login/index';
$route['login/up'] = 'login/up';
$route['backend/logout'] = 'login/logout';
$route['lupa_password'] = 'login/lupa_password/index';
$route['lupa_password/up'] = 'login/lupa_password/up';
$route['lupa_password/reset/(:any)'] = 'login/lupa_password/reset/$1';
$route['lupa_password/reset/up/(:any)'] = 'login/lupa_password/reset_up/$1';

//BACKEND

//Beranda
//Banner
$route['backend/beranda/banner'] = 'backend/beranda/banner/index';
$route['backend/beranda/banner/create'] = 'backend/beranda/banner/create';
$route['backend/beranda/banner/create/up'] = 'backend/beranda/banner/up';
$route['backend/beranda/banner/update/(:any)'] = 'backend/beranda/banner/update/$1';
$route['backend/beranda/banner/update/down/(:any)'] = 'backend/beranda/banner/down/$1';
$route['backend/beranda/banner/delete/(:any)'] = 'backend/beranda/banner/delete/$1';
$route['backend/beranda/banner/detail/(:any)'] = 'backend/beranda/banner/detail/$1';
//Ads Space
$route['backend/beranda/adsspace'] = 'backend/beranda/adsspace/index';
$route['backend/beranda/adsspace/create'] = 'backend/beranda/adsspace/create';
$route['backend/beranda/adsspace/create/up'] = 'backend/beranda/adsspace/up';
$route['backend/beranda/adsspace/update/(:any)'] = 'backend/beranda/adsspace/update/$1';
$route['backend/beranda/adsspace/update/down/(:any)'] = 'backend/beranda/adsspace/down/$1';
$route['backend/beranda/adsspace/delete/(:any)'] = 'backend/beranda/adsspace/delete/$1';
$route['backend/beranda/adsspace/detail/(:any)'] = 'backend/beranda/adsspace/detail/$1';
//Info Graphics
$route['backend/beranda/infographics'] = 'backend/beranda/infographics/index';
$route['backend/beranda/infographics/create'] = 'backend/beranda/infographics/create';
$route['backend/beranda/infographics/create/up'] = 'backend/beranda/infographics/up';
$route['backend/beranda/infographics/update/(:any)'] = 'backend/beranda/infographics/update/$1';
$route['backend/beranda/infographics/update/down/(:any)'] = 'backend/beranda/infographics/down/$1';
$route['backend/beranda/infographics/delete/(:any)'] = 'backend/beranda/infographics/delete/$1';
$route['backend/beranda/infographics/detail/(:any)'] = 'backend/beranda/infographics/detail/$1';
//Galeri
$route['backend/beranda/galeri'] = 'backend/beranda/galeri/index';
$route['backend/beranda/galeri/create'] = 'backend/beranda/galeri/create';
$route['backend/beranda/galeri/create/up'] = 'backend/beranda/galeri/up';
$route['backend/beranda/galeri/update/(:any)'] = 'backend/beranda/galeri/update/$1';
$route['backend/beranda/galeri/update/down/(:any)'] = 'backend/beranda/galeri/down/$1';
$route['backend/beranda/galeri/delete/(:any)'] = 'backend/beranda/galeri/delete/$1';
$route['backend/beranda/galeri/detail/(:any)'] = 'backend/beranda/galeri/detail/$1';

//Association
//About Us
//History of API
$route['backend/association/aboutus/history'] = 'backend/association/history/index';
$route['backend/association/aboutus/history/create'] = 'backend/association/history/create';
$route['backend/association/aboutus/history/create/up'] = 'backend/association/history/up';
$route['backend/association/aboutus/history/update/(:any)'] = 'backend/association/history/update/$1';
$route['backend/association/aboutus/history/update/down/(:any)'] = 'backend/association/history/down/$1';
$route['backend/association/aboutus/history/delete/(:any)'] = 'backend/association/history/delete/$1';
$route['backend/association/aboutus/history/detail/(:any)'] = 'backend/association/history/detail/$1';
//Objective
$route['backend/association/aboutus/objective/create'] = 'backend/association/history/create2';
$route['backend/association/aboutus/objective/create/up'] = 'backend/association/history/up2';
$route['backend/association/aboutus/objective/update/(:any)'] = 'backend/association/history/update2/$1';
$route['backend/association/aboutus/objective/update/down/(:any)'] = 'backend/association/history/down2/$1';
$route['backend/association/aboutus/objective/delete/(:any)'] = 'backend/association/history/delete2/$1';
$route['backend/association/aboutus/objective/detail/(:any)'] = 'backend/association/history/detail2/$1';
//President
$route['backend/association/aboutus/president/create'] = 'backend/association/history/create3';
$route['backend/association/aboutus/president/create/up'] = 'backend/association/history/up3';
$route['backend/association/aboutus/president/update/(:any)'] = 'backend/association/history/update3/$1';
$route['backend/association/aboutus/president/update/down/(:any)'] = 'backend/association/history/down3/$1';
$route['backend/association/aboutus/president/delete/(:any)'] = 'backend/association/history/delete3/$1';
$route['backend/association/aboutus/president/detail/(:any)'] = 'backend/association/history/detail3/$1';
//Vision & Mission
$route['backend/association/aboutus/visionmission'] = 'backend/association/visionmission/index';
$route['backend/association/aboutus/visionmission/create'] = 'backend/association/visionmission/create';
$route['backend/association/aboutus/visionmission/create/up'] = 'backend/association/visionmission/up';
$route['backend/association/aboutus/visionmission/update/(:any)'] = 'backend/association/visionmission/update/$1';
$route['backend/association/aboutus/visionmission/update/down/(:any)'] = 'backend/association/visionmission/down/$1';
$route['backend/association/aboutus/visionmission/delete/(:any)'] = 'backend/association/visionmission/delete/$1';
$route['backend/association/aboutus/visionmission/detail/(:any)'] = 'backend/association/visionmission/detail/$1';
//Current Program
$route['backend/association/aboutus/currentprogram'] = 'backend/association/currentprogram/index';
$route['backend/association/aboutus/currentprogram/create'] = 'backend/association/currentprogram/create';
$route['backend/association/aboutus/currentprogram/create/up'] = 'backend/association/currentprogram/up';
$route['backend/association/aboutus/currentprogram/update/(:any)'] = 'backend/association/currentprogram/update/$1';
$route['backend/association/aboutus/currentprogram/update/down/(:any)'] = 'backend/association/currentprogram/down/$1';
$route['backend/association/aboutus/currentprogram/delete/(:any)'] = 'backend/association/currentprogram/delete/$1';
$route['backend/association/aboutus/currentprogram/detail/(:any)'] = 'backend/association/currentprogram/detail/$1';
//President Message
$route['backend/association/aboutus/presidentmessage'] = 'backend/association/presidentmessage/index';
$route['backend/association/aboutus/presidentmessage/create'] = 'backend/association/presidentmessage/create';
$route['backend/association/aboutus/presidentmessage/create/up'] = 'backend/association/presidentmessage/up';
$route['backend/association/aboutus/presidentmessage/update/(:any)'] = 'backend/association/presidentmessage/update/$1';
$route['backend/association/aboutus/presidentmessage/update/down/(:any)'] = 'backend/association/presidentmessage/down/$1';
$route['backend/association/aboutus/presidentmessage/delete/(:any)'] = 'backend/association/presidentmessage/delete/$1';
$route['backend/association/aboutus/presidentmessage/detail/(:any)'] = 'backend/association/presidentmessage/detail/$1';
//The Board
$route['backend/association/theboard'] = 'backend/association/theboard/index';
$route['backend/association/theboard/create'] = 'backend/association/theboard/create';
$route['backend/association/theboard/create/up'] = 'backend/association/theboard/up';
$route['backend/association/theboard/update/(:any)'] = 'backend/association/theboard/update/$1';
$route['backend/association/theboard/update/down/(:any)'] = 'backend/association/theboard/down/$1';
$route['backend/association/theboard/delete/(:any)'] = 'backend/association/theboard/delete/$1';
$route['backend/association/theboard/detail/(:any)'] = 'backend/association/theboard/detail/$1';
//Member
$route['backend/association/member'] = 'backend/association/member/index';
$route['backend/association/member/create'] = 'backend/association/member/create';
$route['backend/association/member/create/up'] = 'backend/association/member/up';
$route['backend/association/member/update/(:any)'] = 'backend/association/member/update/$1';
$route['backend/association/member/update/down/(:any)'] = 'backend/association/member/down/$1';
$route['backend/association/member/delete/(:any)'] = 'backend/association/member/delete/$1';
$route['backend/association/member/detail/(:any)'] = 'backend/association/member/detail/$1';
//Student Chapter
$route['backend/association/studentchapter'] = 'backend/association/studentchapter/index';
$route['backend/association/studentchapter/create'] = 'backend/association/studentchapter/create';
$route['backend/association/studentchapter/create/up'] = 'backend/association/studentchapter/up';
$route['backend/association/studentchapter/update/(:any)'] = 'backend/association/studentchapter/update/$1';
$route['backend/association/studentchapter/update/down/(:any)'] = 'backend/association/studentchapter/down/$1';
$route['backend/association/studentchapter/delete/(:any)'] = 'backend/association/studentchapter/delete/$1';
$route['backend/association/studentchapter/detail/(:any)'] = 'backend/association/studentchapter/detail/$1';

//Geothermal Potency
//Main Page
$route['backend/geothermalpotency/main'] = 'backend/geothermalpotency/main/index';
$route['backend/geothermalpotency/main/create'] = 'backend/geothermalpotency/main/create';
$route['backend/geothermalpotency/main/create/up'] = 'backend/geothermalpotency/main/up';
$route['backend/geothermalpotency/main/update/(:any)'] = 'backend/geothermalpotency/main/update/$1';
$route['backend/geothermalpotency/main/update/down/(:any)'] = 'backend/geothermalpotency/main/down/$1';
$route['backend/geothermalpotency/main/delete/(:any)'] = 'backend/geothermalpotency/main/delete/$1';
$route['backend/geothermalpotency/main/detail/(:any)'] = 'backend/geothermalpotency/main/detail/$1';
//Island, Province, District
//Island
$route['backend/geothermalpotency/island'] = 'backend/geothermalpotency/island/index';
$route['backend/geothermalpotency/island/create'] = 'backend/geothermalpotency/island/create';
$route['backend/geothermalpotency/island/create/up'] = 'backend/geothermalpotency/island/up';
$route['backend/geothermalpotency/island/update/(:any)'] = 'backend/geothermalpotency/island/update/$1';
$route['backend/geothermalpotency/island/update/down/(:any)'] = 'backend/geothermalpotency/island/down/$1';
$route['backend/geothermalpotency/island/delete/(:any)'] = 'backend/geothermalpotency/island/delete/$1';
//Province
$route['backend/geothermalpotency/province/create'] = 'backend/geothermalpotency/island/create2';
$route['backend/geothermalpotency/province/create/up'] = 'backend/geothermalpotency/island/up2';
$route['backend/geothermalpotency/province/update/(:any)'] = 'backend/geothermalpotency/island/update2/$1';
$route['backend/geothermalpotency/province/update/down/(:any)'] = 'backend/geothermalpotency/island/down2/$1';
$route['backend/geothermalpotency/province/delete/(:any)'] = 'backend/geothermalpotency/island/delete2/$1';
//District
$route['backend/geothermalpotency/district/create'] = 'backend/geothermalpotency/island/create3';
$route['backend/geothermalpotency/district/create/up'] = 'backend/geothermalpotency/island/up3';
$route['backend/geothermalpotency/district/update/(:any)'] = 'backend/geothermalpotency/island/update3/$1';
$route['backend/geothermalpotency/district/update/down/(:any)'] = 'backend/geothermalpotency/island/down3/$1';
$route['backend/geothermalpotency/district/delete/(:any)'] = 'backend/geothermalpotency/island/delete3/$1';
//Geothermal Resources
$route['backend/geothermalpotency/resources'] = 'backend/geothermalpotency/resources/index';
$route['backend/geothermalpotency/resources/island/(:any)'] = 'backend/geothermalpotency/resources/island/$1';
$route['backend/geothermalpotency/resources/island/(:any)/create'] = 'backend/geothermalpotency/resources/create/$1';
$route['backend/geothermalpotency/resources/island/(:any)/create/up'] = 'backend/geothermalpotency/resources/up/$1';
$route['backend/geothermalpotency/resources/island/(:any)/update/(:any)'] = 'backend/geothermalpotency/resources/update/$1/$2';
$route['backend/geothermalpotency/resources/update/down/(:any)'] = 'backend/geothermalpotency/resources/down/$1';
$route['backend/geothermalpotency/resources/delete/(:any)'] = 'backend/geothermalpotency/resources/delete/$1';
$route['backend/geothermalpotency/resources/island/(:any)/detail/(:any)'] = 'backend/geothermalpotency/resources/detail/$2';
//Geothermal Working Area
$route['backend/geothermalpotency/workingarea'] = 'backend/geothermalpotency/workingarea/index';
$route['backend/geothermalpotency/workingarea/create'] = 'backend/geothermalpotency/workingarea/create';
$route['backend/geothermalpotency/workingarea/create/up'] = 'backend/geothermalpotency/workingarea/up';
$route['backend/geothermalpotency/workingarea/update/(:any)'] = 'backend/geothermalpotency/workingarea/update/$1';
$route['backend/geothermalpotency/workingarea/update/down/(:any)'] = 'backend/geothermalpotency/workingarea/down/$1';
$route['backend/geothermalpotency/workingarea/delete/(:any)'] = 'backend/geothermalpotency/workingarea/delete/$1';
$route['backend/geothermalpotency/workingarea/detail/(:any)'] = 'backend/geothermalpotency/workingarea/detail/$1';
// Power Plant
$route['backend/geothermalpotency/workingarea/powerplant'] = 'backend/geothermalpotency/powerplant/index';
$route['backend/geothermalpotency/workingarea/powerplant/create'] = 'backend/geothermalpotency/powerplant/create';
$route['backend/geothermalpotency/workingarea/powerplant/create/up'] = 'backend/geothermalpotency/powerplant/up';
$route['backend/geothermalpotency/workingarea/powerplant/update/(:any)'] = 'backend/geothermalpotency/powerplant/update/$1';
$route['backend/geothermalpotency/workingarea/powerplant/update/down/(:any)'] = 'backend/geothermalpotency/powerplant/down/$1';
$route['backend/geothermalpotency/workingarea/powerplant/delete/(:any)'] = 'backend/geothermalpotency/powerplant/delete/$1';
$route['backend/geothermalpotency/workingarea/powerplant/detail/(:any)'] = 'backend/geothermalpotency/powerplant/detail/$1';
// Project & Activities
$route['backend/geothermalpotency/workingarea/project'] = 'backend/geothermalpotency/project/index';
$route['backend/geothermalpotency/workingarea/project/create'] = 'backend/geothermalpotency/project/create';
$route['backend/geothermalpotency/workingarea/project/create/up'] = 'backend/geothermalpotency/project/up';
$route['backend/geothermalpotency/workingarea/project/update/(:any)'] = 'backend/geothermalpotency/project/update/$1';
$route['backend/geothermalpotency/workingarea/project/update/down/(:any)'] = 'backend/geothermalpotency/project/down/$1';
$route['backend/geothermalpotency/workingarea/project/delete/(:any)'] = 'backend/geothermalpotency/project/delete/$1';
$route['backend/geothermalpotency/workingarea/project/detail/(:any)'] = 'backend/geothermalpotency/project/detail/$1';
// Tender
$route['backend/geothermalpotency/workingarea/tender'] = 'backend/geothermalpotency/tender/index';
$route['backend/geothermalpotency/workingarea/tender/create'] = 'backend/geothermalpotency/tender/create';
$route['backend/geothermalpotency/workingarea/tender/create/up'] = 'backend/geothermalpotency/tender/up';
$route['backend/geothermalpotency/workingarea/tender/update/(:any)'] = 'backend/geothermalpotency/tender/update/$1';
$route['backend/geothermalpotency/workingarea/tender/update/down/(:any)'] = 'backend/geothermalpotency/tender/down/$1';
$route['backend/geothermalpotency/workingarea/tender/delete/(:any)'] = 'backend/geothermalpotency/tender/delete/$1';
$route['backend/geothermalpotency/workingarea/tender/detail/(:any)'] = 'backend/geothermalpotency/tender/detail/$1';

//Geothermal Business
//Main Page
$route['backend/geothermalbusiness/main'] = 'backend/geothermalbusiness/main/index';
$route['backend/geothermalbusiness/main/create'] = 'backend/geothermalbusiness/main/create';
$route['backend/geothermalbusiness/main/create/up'] = 'backend/geothermalbusiness/main/up';
$route['backend/geothermalbusiness/main/update/(:any)'] = 'backend/geothermalbusiness/main/update/$1';
$route['backend/geothermalbusiness/main/update/down/(:any)'] = 'backend/geothermalbusiness/main/down/$1';
$route['backend/geothermalbusiness/main/delete/(:any)'] = 'backend/geothermalbusiness/main/delete/$1';
$route['backend/geothermalbusiness/main/detail/(:any)'] = 'backend/geothermalbusiness/main/detail/$1';
//Geothermal Regulation
//Category Geothermal Regulation
$route['backend/geothermalbusiness/geothermalregulation/category/create'] = 'backend/geothermalbusiness/geothermalregulation/create2';
$route['backend/geothermalbusiness/geothermalregulation/category/create/up'] = 'backend/geothermalbusiness/geothermalregulation/up2';
$route['backend/geothermalbusiness/geothermalregulation/category/update/(:any)'] = 'backend/geothermalbusiness/geothermalregulation/update2/$1';
$route['backend/geothermalbusiness/geothermalregulation/category/update/down/(:any)'] = 'backend/geothermalbusiness/geothermalregulation/down2/$1';
$route['backend/geothermalbusiness/geothermalregulation/category/delete/(:any)'] = 'backend/geothermalbusiness/geothermalregulation/delete2/$1';
//Geothermal Regulation
$route['backend/geothermalbusiness/geothermalregulation'] = 'backend/geothermalbusiness/geothermalregulation/index';
$route['backend/geothermalbusiness/geothermalregulation/create'] = 'backend/geothermalbusiness/geothermalregulation/create';
$route['backend/geothermalbusiness/geothermalregulation/create/up'] = 'backend/geothermalbusiness/geothermalregulation/up';
$route['backend/geothermalbusiness/geothermalregulation/update/(:any)'] = 'backend/geothermalbusiness/geothermalregulation/update/$1';
$route['backend/geothermalbusiness/geothermalregulation/update/down/(:any)'] = 'backend/geothermalbusiness/geothermalregulation/down/$1';
$route['backend/geothermalbusiness/geothermalregulation/delete/(:any)'] = 'backend/geothermalbusiness/geothermalregulation/delete/$1';
$route['backend/geothermalbusiness/geothermalregulation/detail/(:any)'] = 'backend/geothermalbusiness/geothermalregulation/detail/$1';
//Category Geothermal Regulation
$route['backend/geothermalbusiness/relatedregulation/category/create'] = 'backend/geothermalbusiness/relatedregulation/create2';
$route['backend/geothermalbusiness/relatedregulation/category/create/up'] = 'backend/geothermalbusiness/relatedregulation/up2';
$route['backend/geothermalbusiness/relatedregulation/category/update/(:any)'] = 'backend/geothermalbusiness/relatedregulation/update2/$1';
$route['backend/geothermalbusiness/relatedregulation/category/update/down/(:any)'] = 'backend/geothermalbusiness/relatedregulation/down2/$1';
$route['backend/geothermalbusiness/relatedregulation/category/delete/(:any)'] = 'backend/geothermalbusiness/relatedregulation/delete2/$1';
//Related Regulation
$route['backend/geothermalbusiness/relatedregulation'] = 'backend/geothermalbusiness/relatedregulation/index';
$route['backend/geothermalbusiness/relatedregulation/create'] = 'backend/geothermalbusiness/relatedregulation/create';
$route['backend/geothermalbusiness/relatedregulation/create/up'] = 'backend/geothermalbusiness/relatedregulation/up';
$route['backend/geothermalbusiness/relatedregulation/update/(:any)'] = 'backend/geothermalbusiness/relatedregulation/update/$1';
$route['backend/geothermalbusiness/relatedregulation/update/down/(:any)'] = 'backend/geothermalbusiness/relatedregulation/down/$1';
$route['backend/geothermalbusiness/relatedregulation/delete/(:any)'] = 'backend/geothermalbusiness/relatedregulation/delete/$1';
$route['backend/geothermalbusiness/relatedregulation/detail/(:any)'] = 'backend/geothermalbusiness/relatedregulation/detail/$1';
//Stakeholder Overview
$route['backend/geothermalbusiness/stakeholder-overview'] = 'backend/geothermalbusiness/stakeholderoverview/index';
$route['backend/geothermalbusiness/stakeholder-overview/create'] = 'backend/geothermalbusiness/stakeholderoverview/create';
$route['backend/geothermalbusiness/stakeholder-overview/create/up'] = 'backend/geothermalbusiness/stakeholderoverview/up';
$route['backend/geothermalbusiness/stakeholder-overview/update/(:any)'] = 'backend/geothermalbusiness/stakeholderoverview/update/$1';
$route['backend/geothermalbusiness/stakeholder-overview/update/down/(:any)'] = 'backend/geothermalbusiness/stakeholderoverview/down/$1';
$route['backend/geothermalbusiness/stakeholder-overview/delete/(:any)'] = 'backend/geothermalbusiness/stakeholderoverview/delete/$1';
$route['backend/geothermalbusiness/stakeholder-overview/detail/(:any)'] = 'backend/geothermalbusiness/stakeholderoverview/detail/$1';

//Stakeholder Directory
$route['backend/geothermalbusiness/stakeholder'] = 'backend/geothermalbusiness/stakeholder/index';
$route['backend/geothermalbusiness/stakeholder/create'] = 'backend/geothermalbusiness/stakeholder/create';
$route['backend/geothermalbusiness/stakeholder/create/up'] = 'backend/geothermalbusiness/stakeholder/up';
$route['backend/geothermalbusiness/stakeholder/update/(:any)'] = 'backend/geothermalbusiness/stakeholder/update/$1';
$route['backend/geothermalbusiness/stakeholder/update/down/(:any)'] = 'backend/geothermalbusiness/stakeholder/down/$1';
$route['backend/geothermalbusiness/stakeholder/delete/(:any)'] = 'backend/geothermalbusiness/stakeholder/delete/$1';
$route['backend/geothermalbusiness/stakeholder/detail/(:any)'] = 'backend/geothermalbusiness/stakeholder/detail/$1';

//NZTE
//Story
$route['backend/nzte/story'] = 'backend/nzte/story/index';
$route['backend/nzte/story/create'] = 'backend/nzte/story/create';
$route['backend/nzte/story/create/up'] = 'backend/nzte/story/up';
$route['backend/nzte/story/update/(:any)'] = 'backend/nzte/story/update/$1';
$route['backend/nzte/story/update/down/(:any)'] = 'backend/nzte/story/down/$1';
$route['backend/nzte/story/delete/(:any)'] = 'backend/nzte/story/delete/$1';
$route['backend/nzte/story/detail/(:any)'] = 'backend/nzte/story/detail/$1';
//Directory
$route['backend/nzte/directory'] = 'backend/nzte/businessdirectory/index';
$route['backend/nzte/directory/create'] = 'backend/nzte/businessdirectory/create';
$route['backend/nzte/directory/create/up'] = 'backend/nzte/businessdirectory/up';
$route['backend/nzte/directory/update/(:any)'] = 'backend/nzte/businessdirectory/update/$1';
$route['backend/nzte/directory/update/down/(:any)'] = 'backend/nzte/businessdirectory/down/$1';
$route['backend/nzte/directory/delete/(:any)'] = 'backend/nzte/businessdirectory/delete/$1';
$route['backend/nzte/directory/detail/(:any)'] = 'backend/nzte/businessdirectory/detail/$1';

//News
$route['backend/news'] = 'backend/news/news/index';
$route['backend/news/create'] = 'backend/news/news/create';
$route['backend/news/create/up'] = 'backend/news/news/up';
$route['backend/news/update/(:any)'] = 'backend/news/news/update/$1';
$route['backend/news/update/down/(:any)'] = 'backend/news/news/down/$1';
$route['backend/news/delete/(:any)'] = 'backend/news/news/delete/$1';
$route['backend/news/detail/(:any)'] = 'backend/news/news/detail/$1';

//Library
$route['backend/library/(:any)'] = 'backend/library/library/index/$1';
$route['backend/library/(:any)/create'] = 'backend/library/library/create/$1';
$route['backend/library/(:any)/create/up'] = 'backend/library/library/up/$1';
$route['backend/library/(:any)/update/(:any)'] = 'backend/library/library/update/$1/$2';
$route['backend/library/(:any)/update/down/(:any)'] = 'backend/library/library/down/$1/$2';
$route['backend/library/(:any)/delete/(:any)'] = 'backend/library/library/delete/$1/$2';
$route['backend/library/(:any)/detail/(:any)'] = 'backend/library/library/detail/$1/$2';

//Event & Gallery
//Event Calendar
$route['backend/eventgallery/event'] = 'backend/eventgallery/event/index';
$route['backend/eventgallery/event/create'] = 'backend/eventgallery/event/create';
$route['backend/eventgallery/event/create/up'] = 'backend/eventgallery/event/up';
$route['backend/eventgallery/event/update/(:any)'] = 'backend/eventgallery/event/update/$1';
$route['backend/eventgallery/event/update/down/(:any)'] = 'backend/eventgallery/event/down/$1';
$route['backend/eventgallery/event/delete/(:any)'] = 'backend/eventgallery/event/delete/$1';
$route['backend/eventgallery/event/detail/(:any)'] = 'backend/eventgallery/event/detail/$1';
//Gallery
$route['backend/eventgallery/gallery'] = 'backend/eventgallery/gallery/index';
$route['backend/eventgallery/gallery/create'] = 'backend/eventgallery/gallery/create';
$route['backend/eventgallery/gallery/create/up'] = 'backend/eventgallery/gallery/up';
$route['backend/eventgallery/gallery/update/(:any)'] = 'backend/eventgallery/gallery/update/$1';
$route['backend/eventgallery/gallery/update/down/(:any)'] = 'backend/eventgallery/gallery/down/$1';
$route['backend/eventgallery/gallery/delete/(:any)'] = 'backend/eventgallery/gallery/delete/$1';
$route['backend/eventgallery/gallery/detail/(:any)'] = 'backend/eventgallery/gallery/detail/$1';

//Gallery Detail
$route['backend/eventgallery/gallery/(:any)/(:any)'] = 'backend/eventgallery/gallerydetail/index/$1/$2';
$route['backend/eventgallery/gallery/(:any)/up/(:any)'] = 'backend/eventgallery/gallerydetail/up/$1/$2';
$route['backend/eventgallery/gallery/(:any)/delete/(:any)/(:any)'] = 'backend/eventgallery/gallerydetail/delete/$1/$2/$3';

//Kontak
$route['backend/kontak'] = 'backend/kontak/kontak/index';
$route['backend/kontak/create'] = 'backend/kontak/kontak/create';
$route['backend/kontak/create/up'] = 'backend/kontak/kontak/up';
$route['backend/kontak/update/(:any)'] = 'backend/kontak/kontak/update/$1';
$route['backend/kontak/update/down/(:any)'] = 'backend/kontak/kontak/down/$1';
$route['backend/kontak/delete/(:any)'] = 'backend/kontak/kontak/delete/$1';
$route['backend/kontak/detail/(:any)'] = 'backend/kontak/kontak/detail/$1';

//User
$route['backend/user'] = 'backend/user/user/index';
$route['backend/user/create'] = 'backend/user/user/create';
$route['backend/user/create/up'] = 'backend/user/user/up';
$route['backend/user/update/(:any)'] = 'backend/user/user/update/$1';
$route['backend/user/update/down/(:any)'] = 'backend/user/user/down/$1';
$route['backend/user/delete/(:any)'] = 'backend/user/user/delete/$1';
$route['backend/user/detail/(:any)'] = 'backend/user/user/detail/$1';

//FRONTEND
$route['home'] = 'frontend/home';

//Association
$route['association/aboutus'] = 'frontend/association/aboutus/index';
$route['association/theboard'] = 'frontend/association/theboard/index';
$route['association/member'] = 'frontend/association/member/index';
$route['association/studentchapter'] = 'frontend/association/studentchapter/index';

//Geothermal Potency
$route['geothermal-potency'] = 'frontend/geothermalpotency/potency/index';
$route['geothermal-potency/resources'] = 'frontend/geothermalpotency/resources/index';
$route['geothermal-potency/resources/(:any)'] = 'frontend/geothermalpotency/resources/island/$1';
$route['geothermal-potency/workingarea'] = 'frontend/geothermalpotency/workingarea/index';
$route['geothermal-potency/workingarea/tender'] = 'frontend/geothermalpotency/tender/index';

//Geothermal Business
$route['geothermal-business'] = 'frontend/geothermalbusiness/business/index';
$route['geothermal-business/geothermal-regulations'] = 'frontend/geothermalbusiness/geothermalregulations/index';
$route['geothermal-business/related-regulations'] = 'frontend/geothermalbusiness/relatedregulations/index';
$route['geothermal-business/stakeholder'] = 'frontend/geothermalbusiness/stakeholder/index';
$route['geothermal-business/stakeholder/(:any)'] = 'frontend/geothermalbusiness/stakeholder/category/$1';

//NZTE
//Story
$route['nzte/story'] = 'frontend/nzte/story/index';
//Directory
$route['nzte/directory'] = 'frontend/nzte/businessdirectory/index';
//News
$route['news'] = 'frontend/news';
$route['news/detail/(:any)'] = 'frontend/news/detail/$1';

//Library
$route['library/(:any)'] = 'frontend/library/library/index/$1';

//Event & Gallery
//Event Calendar
$route['eventgallery/event'] = 'frontend/eventgallery/event/index';
$route['eventgallery/event/detail/(:any)'] = 'frontend/eventgallery/event/detail/$1';
//Gallery
$route['eventgallery/gallery'] = 'frontend/eventgallery/gallery/index';
$route['eventgallery/gallery/detail/(:any)'] = 'frontend/eventgallery/gallery/detail/$1';