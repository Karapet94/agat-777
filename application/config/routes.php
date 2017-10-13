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
$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route[AVAILABLE_LANGUAGES_ISO_CODES_FOR_ROUTING] = 'home/index/$1';
$route[AVAILABLE_LANGUAGES_ISO_CODES_FOR_ROUTING . '/' . SLUG_HOME] = 'home/index/$1';
$route[AVAILABLE_LANGUAGES_ISO_CODES_FOR_ROUTING . '/' . SLUG_ABOUT_US] = 'about_us/index/$1';
$route[AVAILABLE_LANGUAGES_ISO_CODES_FOR_ROUTING . '/' . SLUG_PARTNER] = 'partner/index/$1';
$route[AVAILABLE_LANGUAGES_ISO_CODES_FOR_ROUTING . '/' . SLUG_PORTFOLIO] = 'portfolio/index/$1';
$route[AVAILABLE_LANGUAGES_ISO_CODES_FOR_ROUTING . '/' . SLUG_PORTFOLIO . '/(:any)'] = 'portfolio/index/$1/$2';
$route[AVAILABLE_LANGUAGES_ISO_CODES_FOR_ROUTING . '/' . SLUG_REPORT] = 'report/index/$1';
$route[AVAILABLE_LANGUAGES_ISO_CODES_FOR_ROUTING . '/' . SLUG_CONTACTS] = 'contacts/index/$1';
$route[AVAILABLE_LANGUAGES_ISO_CODES_FOR_ROUTING . '/' . SLUG_SERVICES . '/' . SLUG_SERVICE_CONSTRUCTION] = 'services/index/$1/' . SERVICE_ID_CONSTRUCTION;
$route[AVAILABLE_LANGUAGES_ISO_CODES_FOR_ROUTING . '/' . SLUG_SERVICES . '/' . SLUG_SERVICE_FURNITURE_PRODUCTION] = 'services/index/$1/' . SERVICE_ID_FURNITURE_PRODUCTION;
$route[AVAILABLE_LANGUAGES_ISO_CODES_FOR_ROUTING . '/' . SLUG_SERVICES . '/' . SLUG_SERVICE_EURO_WINDOWSES] = 'services/index/$1/' . SERVICE_ID_EURO_WINDOWSES;
$route[AVAILABLE_LANGUAGES_ISO_CODES_FOR_ROUTING . '/' . SLUG_SERVICES . '/' . SLUG_SERVICE_STEEL_PRODUCTS] = 'services/index/$1/' . SERVICE_ID_STEEL_PRODUCTS;
$route[AVAILABLE_LANGUAGES_ISO_CODES_FOR_ROUTING . '/' . SLUG_SERVICES . '/' . SLUG_SERVICE_HOTEL] = 'services/index/$1/' . SERVICE_ID_HOTEL;
