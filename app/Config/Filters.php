<?php namespace Config;

use App\Filters\Authentication\ForgotPassAttemptFilter;
use App\Filters\Authentication\LoggedFilter;
use App\Filters\Authentication\LoginAttemptFilter;
use App\Filters\Authentication\RegisterAttemptFilter;
use App\Filters\Authentication\ResetPassAttemptFilter;
use App\Filters\Authentication\VerifyEmailAttemptFilter;
use App\Middleware\Ajax;
use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Filters\CSRF;
use CodeIgniter\Filters\DebugToolbar;
use CodeIgniter\Filters\Honeypot;

class Filters extends BaseConfig
{
    // Makes reading things below nicer,
    // and simpler to change out script that's used.
    public $aliases = [
        'csrf' => CSRF::class,
        'toolbar' => DebugToolbar::class,
        'honeypot' => Honeypot::class,
        'ajax' => Ajax::class,
        'loginAttempt' => LoginAttemptFilter::class,
        'forgotPass' => ForgotPassAttemptFilter::class,
        'resetPass' => ResetPassAttemptFilter::class,
        'register' => RegisterAttemptFilter::class,
        'verifyEmail' => VerifyEmailAttemptFilter::class,
        'isLoggedIn' => LoggedFilter::class
    ];

    // Always applied before every request
    public $globals = [
        'before' => [
            //'honeypot'
            'csrf',
            'ajax',
        ],
        'after' => [
            'toolbar',
            //'honeypot',
            'ajax',
        ],
    ];

    // Works on all of a particular HTTP method
    // (GET, POST, etc) as BEFORE filters only
    //     like: 'post' => ['CSRF', 'throttle'],
    public $methods = [];

    // List filter aliases and any before/after uri patterns
    // that they should run on, like:
    //    'isLoggedIn' => ['before' => ['account/*', 'profiles/*']],
    public $filters = [];
}
