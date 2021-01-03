<?php

//--------------------------------------------------------------------
// App Namespace
//--------------------------------------------------------------------
// This defines the default Namespace that is used throughout
// CodeIgniter to refer to the Application directory. Change
// this constant to change the namespace that all application
// classes should use.
//
// NOTE: changing this will require manually modifying the
// existing namespaces of App\* namespaced-classes.
//
defined('APP_NAMESPACE') || define('APP_NAMESPACE', 'App');

/*
|--------------------------------------------------------------------------
| Composer Path
|--------------------------------------------------------------------------
|
| The path that Composer's autoload file is expected to live. By default,
| the vendor folder is in the Root directory, but you can customize that here.
*/
defined('COMPOSER_PATH') || define('COMPOSER_PATH', ROOTPATH . 'vendor/autoload.php');

/*
|--------------------------------------------------------------------------
| Timing Constants
|--------------------------------------------------------------------------
|
| Provide simple ways to work with the myriad of PHP functions that
| require information to be in seconds.
*/
defined('SECOND') || define('SECOND', 1);
defined('MINUTE') || define('MINUTE', 60);
defined('HOUR') || define('HOUR', 3600);
defined('DAY') || define('DAY', 86400);
defined('WEEK') || define('WEEK', 604800);
defined('MONTH') || define('MONTH', 2592000);
defined('YEAR') || define('YEAR', 31536000);
defined('DECADE') || define('DECADE', 315360000);

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
defined('EXIT_SUCCESS') || define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR') || define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG') || define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE') || define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS') || define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') || define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT') || define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE') || define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN') || define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX') || define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code

/*
|--------------------------------------------------------------------------
| Application Constants
|--------------------------------------------------------------------------
| This are the constants that carry most often used constants and it's
| address .It has all
|
| # Application Default Constants
| # Organization/ Company/ Client information
| #
*/
defined('APP_DEV') || define('APP_DEV', ''); // developer name major
defined('APP_TITLE_LOGO') || define('APP_TITLE_LOGO', 'favicon.ico'); // application tab logo url
defined('APP_NAME') || define('APP_NAME', 'TEST APP NAME'); // applications Project name
defined('APP_VERSION') || define('APP_VERSION', '1.0.0'); // application production backend version
defined('APP_BUILD') || define('APP_BUILD', 'dev'); // application minor build version if compile required
defined('APP_RELEASED') || define('APP_RELEASED', '2021-01-03'); // latest production release date
defined('UI_VERSION') || define('UI_VERSION', '3.0.5'); // template release version

defined('ORG_TITLE_LONG') || define('ORG_TITLE_LONG', 'Your Client Organization'); // Client organization long Name Title
defined('ORG_TITLE_SHORT') || define('ORG_TITLE_SHORT', ''); // Client organization Name short Title
defined('ORG_TITLE_LOGO') || define('ORG_TITLE_LOGO', ''); // client org title/ logo image url
defined('SUPPORT_URL') || define('SUPPORT_URL', ''); // dev off name
defined('SUPPORT_TEAM') || define('SUPPORT_TEAM', 'Customer Support'); // dev off name

/*
|--------------------------------------------------------------------------
| Form Validation Expressions
|--------------------------------------------------------------------------
| This constants are can be used as form validation patterns and server side
| validation rules on set validation and get
|
*/

defined('NAME_EXP') || define('NAME_EXP', '[a-zA-Z.\- 0-9]+$'); //EX: example name 1
defined('MOBILE_EXP') || define('MOBILE_EXP', '^01[\d]{9}$'); //EX: 012345678910
defined('TEXT_EXP') || define('TEXT_EXP', '[a-zA-Z0-9 ~!#$%&*\-_+=:\/,._\(\)]+$'); //EX: simple paragraph
defined('DATE_EXP') || define('DATE_EXP', '^[\d]{4}-[\d]{2}-[\d]{2}$'); //EX: 2020-12-31
defined('YEAR_EXP') || define('YEAR_EXP', '^[\d]{4}$'); //EX: 2020
defined('GPA_EXP') || define('GPA_EXP', '^[\d].[\d]{2}$'); //EX: 5.00
defined('DD_EXP') || define('DD_EXP', '[0-9]+$'); //EX: 1, 220, 3933
defined('EMAIL_EXP') || define('EMAIL_EXP', '[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$'); //EX: example@example.tld
defined('USERNAME_EXP') || define('USERNAME_EXP', '[0-9a-zA-Z](\w|\d|\s|[._\-]){2,30}$'); //EX: example_233

/*
|--------------------------------------------------------------------------
| Verification Constants
|--------------------------------------------------------------------------
| This constants are used as a verification task constants
| used as value
*/
defined('ACCOUNT_ACTIVATION') || define('ACCOUNT_ACTIVATION', 'activateAccount');
defined('PASSWORD_RESET') || define('PASSWORD_RESET', 'updatePassword');
defined('EMAIL_VERIFICATION') || define('EMAIL_VERIFICATION', 'emailVerification');


/*
|--------------------------------------------------------------------------
| DATABASE Table name Constants
|--------------------------------------------------------------------------
| DATABASE table name constants
| TABLE AS TAB
*/
