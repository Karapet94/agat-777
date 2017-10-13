<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code


/**
 * USER DEFINED CONSTANTS
 */


define('ASSETS_PATH', 'public');
define('JS_PATH', 'public/js');
define('CSS_PATH', 'public/css');
define('IMG_PATH', 'public/images/');
define('CAPTCHA_IMG_PATH', './public/captcha/');
define('CAPTCHA_FONT_PATH', './public/captcha/verdana.ttf');
define('UPLOADS_PATH_WRITE', './public/uploads/');
define('UPLOADS_PATH_READ', 'public/uploads/');
define('UPLOADS_PATH_SLIDER_WRITE', './public/uploads/slider');
define('UPLOADS_PATH_SLIDER_READ', 'public/uploads/slider/');
define('UPLOADS_PATH_ABOUT_US_WRITE', './public/uploads/about_us/');
define('UPLOADS_PATH_ABOUT_US_READ', 'public/uploads/about_us/');
define('UPLOADS_PATH_PORTFOLIO_WRITE', './public/uploads/portfolio');
define('UPLOADS_PATH_PORTFOLIO_READ', 'public/uploads/portfolio/');
define('UPLOADS_PATH_PORTFOLIO_GALLERY_WRITE', './public/uploads/portfolio/gallery/');
define('UPLOADS_PATH_PORTFOLIO_GALLERY_READ', 'public/uploads/portfolio/gallery/');
define('UPLOADS_PATH_SERVICES_WRITE', './public/uploads/services/');
define('UPLOADS_PATH_SERVICES_READ', 'public/uploads/services/');
define('UPLOADS_PATH_SERVICES_GALLERY_WRITE', './public/uploads/services/gallery');
define('UPLOADS_PATH_SERVICES_GALLERY_READ', 'public/uploads/services/gallery/');
define('UPLOADS_PATH_PARTNER_WRITE', './public/uploads/partner/');
define('UPLOADS_PATH_PARTNER_READ', 'public/uploads/partner/');
define('UPLOADS_PATH_REPORT_WRITE', './public/uploads/report/');
define('UPLOADS_PATH_REPORT_READ', 'public/uploads/report/');
define('MSG_SUCCESS_UPDATE', 'Successfully Updated');
define('MSG_SUCCESS_CREATE', 'Successfully Created');
define('MSG_SUCCESS_DELETE', 'Successfully Deleted');
define('MSG_SUCCESS_SAVE', 'Successfully Saved');
define('MSG_ERROR_COMMON_ERROR', 'Server side error, Please try again');
define('MSG_CHANGE_CAPTCHA', 'Successfully Changed');
define('MSG_WRONG_PASSWORD', 'Wrong password');
define('TBL_LANGUAGES', 'agat_languages');
define('TBL_USERS', 'agat_users');
define('TBL_SLIDER', 'agat_slider');
define('TBL_SLIDER_TRANSLATIONS', 'agat_slider_translations');
define('TBL_UNIVERSAL_TEXT', 'agat_universal_text');
define('TBL_UNIVERSAL_TEXT_TRANSLATIONS', 'agat_universal_text_translations');
define('TBL_ABOUT_US', 'agat_about_us');
define('TBL_ABOUT_US_TRANSLATIONS', 'agat_about_us_translations');
define('TBL_PORTFOLIO', 'agat_portfolio');
define('TBL_PORTFOLIO_GALLERY', 'agat_portfolio_gallery');
define('TBL_META', 'agat_meta');
define('TBL_META_TRANSLATIONS', 'agat_meta_translation');
define('TBL_PORTFOLIO_TRANSLATIONS', 'agat_portfolio_translations');
define('TBL_SERVICES', 'agat_services');
define('TBL_SERVICES_GALLERY', 'agat_services_gallery');
define('TBL_SERVICES_TRANSLATIONS', 'agat_services_translations');
define('TBL_PARTNER', 'agat_partner');
define('TBL_PARTNER_TRANSLATIONS', 'agat_partner_translations');
define('TBL_REPORT', 'agat_report');
define('TBL_YOUTUBE', 'agat_youtube');
define('SLUG_HOME', 'home');
define('SLUG_ABOUT_US', 'about-us');
define('SLUG_PARTNER', 'partner');
define('SLUG_PORTFOLIO', 'portfolio');
define('SLUG_REPORT', 'report');
define('SLUG_CONTACTS', 'contacts');
define('SERVICE_ID_CONSTRUCTION', 1);
define('SERVICE_ID_FURNITURE_PRODUCTION', 2);
define('SERVICE_ID_EURO_WINDOWSES', 3);
define('SERVICE_ID_STEEL_PRODUCTS', 4);
define('SERVICE_ID_HOTEL', 5);
define('SLUG_SERVICES', 'services');
define('SLUG_SERVICE_CONSTRUCTION', 'construction');
define('SLUG_SERVICE_FURNITURE_PRODUCTION', 'furniture-production');
define('SLUG_SERVICE_EURO_WINDOWSES', 'euro-windowses-and-doors');
define('SLUG_SERVICE_STEEL_PRODUCTS', 'steel-products');
define('SLUG_SERVICE_HOTEL', 'hotel');
define('META_TYPE_KEYWORDS', 2);
define('META_TYPE_DESCRIPTION', 1);
define('AVAILABLE_LANGUAGES_ISO_CODES_FOR_ROUTING', '(en|hy|ru|ge|fr|es|de|it|tr|kz|by|gr)');
define('ADMIN_USER_NAME', 'admin');
define('ID_PORTFOLIO_ARARAT_MEDICAL_CENTER', 1);
define('ID_PORTFOLIO_HERATSU_MEDICAL_CENTER', 2);
define('ID_PORTFOLIO_INVESTIGATE_COMMITTEE', 4);
define('SLUG_PORTFOLIO_ARARAT_MEDICAL_CENTER', 'ararat_medical_center');
define('SLUG_PORTFOLIO_HERATSU_MEDICAL_CENTER', 'heratsu_medical_center');
define('SLUG_PORTFOLIO_INVESTIGATE_COMMITTEE', 'investigate_committee_of_ra');



/**
 * END USER DEFINED CONSTANTS
 */
