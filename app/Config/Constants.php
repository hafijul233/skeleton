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
defined('HOUR')   || define('HOUR', 3600);
defined('DAY')    || define('DAY', 86400);
defined('WEEK')   || define('WEEK', 604800);
defined('MONTH')  || define('MONTH', 2592000);
defined('YEAR')   || define('YEAR', 31536000);
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
defined('EXIT_SUCCESS')        || define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          || define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         || define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   || define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  || define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') || define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     || define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       || define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      || define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      || define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code

/*
|--------------------------------------------------------------------------
| Application Constants
|--------------------------------------------------------------------------
| This are the constants that carry most often used constants and it's
| address .It has all
|
|
*/
defined('TITLE') || define('TITLE', 'Recruitment Meta'); // Application title for that company
defined('APP_MAJOR') || define('APP_MAJOR', '1.0.0'); // application major version current prtoduction
defined('APP_MINOR') || define('APP_MINOR', 'dev'); // application minor version current prtoduction
defined('UI_VERSION') || define('UI_VERSION', '3.0.5'); // application minor version current prtoduction

defined('APP_FARM') || define('APP_FARM', 'AdovaSoft'); // developer name major
defined('APP_LOGO') || define('APP_LOGO', 'favicon.ico'); // application title logo url
defined('APP_NAME') || define('APP_NAME', 'Job Recruitment System'); // Product name for that Email

defined('RELEASE_DATE') || define('RELEASE_DATE', '2019-11-25'); // latest production release date
defined('ORG_TITLE_LONG') || define('ORG_TITLE_LONG', 'Bangladesh Council of Scientific and Industrial Research'); // Client organization long Name Title
defined('ORG_TITLE_SHORT') || define('ORG_TITLE_SHORT', 'BCSIR'); // Client organization Name short Title
defined('ORG_LOGO') || define('ORG_LOGO', 'img/bcsir_logo.png'); // client org title/ logo image url
defined('ORG_TITLE_LOGO') || define('ORG_TITLE_LOGO', 'img/logo-lg.png'); // client org title/ logo image url

defined('SUPPORT_URL') || define('SUPPORT_URL', 'http://adovasoft.com'); // dev off name
defined('SUPPORT_TEAM') || define('SUPPORT_TEAM', 'Customer Support'); // dev off name

defined('DEFAULT_PHOTO') || define('DEFAULT_PHOTO', 'images.png'); // dev off name
defined('DEV_OFF') || define('DEV_OFF', 'mwOvGOztFXY5ACq3qdOubA=='); // dev off name

defined('ALLOWED') || define('ALLOWED', 'PASSED'); //applicant passed this stage
defined('DENIED') || define('DENIED', 'FAILED'); //applicant failed current stage
defined('PENDING') || define('PENDING', 'WAIT'); //this stage is pending
defined('STG_NA') || define('STG_NA', 'N/A'); //this stage is pending


/*
|--------------------------------------------------------------------------
| Form Validation Expressions
|--------------------------------------------------------------------------
| This constants are used as form validation patterns and server side
| validation rules on set validation and get
|
*/

defined('NAME_EXP') || define('NAME_EXP', '[a-zA-Z.\- 0-9]+$');
defined('MOBILE_EXP') || define('MOBILE_EXP', '^01[\d]{9}$');
defined('APPLICANT_EXP') || define('APPLICANT_EXP', '^[a-zA-Z0-9]{8,10}$');
defined('TEXT_EXP') || define('TEXT_EXP', '[a-zA-Z0-9 ~!#$%&*\-_+=:\/,._\(\)]+');
defined('DATE_EXP') || define('DATE_EXP', '^[\d]{4}-[\d]{2}-[\d]{2}$');
defined('YEAR_EXP') || define('YEAR_EXP', '^[\d]{4}$');
defined('NID_EXP') || define('NID_EXP', '^[\d]{10,17}$');
defined('PID_EXP') || define('PID_EXP', '^[A-Z]+[\d]{3,10}$');
defined('GPA_EXP') || define('GPA_EXP', '^[\d].[\d]{2}$');
defined('ROLL_EXP') || define('ROLL_EXP', '^[a-zA-Z\-0-9 ]$');
defined('DD_EXP') || define('DD_EXP', '[0-9]+$');
defined('EMAIL_EXP') || define('EMAIL_EXP', '[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$');
defined('DATE_RANGE_EXP') || define('DATE_RANGE_EXP', '^[\d]{2} [\w]+ [\d]{4} [00-12]{2}\:[0-59]{2} (A|P)M - [\d]{2} [\w]+ [\d]{4} [0-12]{2}\:[0-59]{2} (A|P)M$');
defined('DATE_SPELL_EXP') || define('DATE_SPELL_EXP', '^[\d]{2} [\w]+ [\d]{4}$');
defined('ATTACHMENT_EXP') || define('ATTACHMENT_EXP', '\w+\.(pdf|doc|docx)');
defined('DATE_TIME_EXP') || define('DATE_TIME_EXP', '^[\d]{2} [\w]+ [\d]{4} [\d]{2}\:[\d]{2} (A|P)M');


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
