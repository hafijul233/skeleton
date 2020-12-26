<?php namespace Config;

use App\Filters\Auth\ForgotPassAttemptFilter;
use App\Filters\Auth\LoggedFilter;
use App\Filters\Auth\LoginAttemptFilter;
use App\Filters\Auth\RegisterAttemptFilter;
use App\Filters\Auth\ResetPassAttemptFilter;
use App\Filters\Auth\VerifyEmailAttemptFilter;
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
        'login' => LoginAttemptFilter::class,
        'forgot-pass' => ForgotPassAttemptFilter::class,
        'reset-pass' => ResetPassAttemptFilter::class,
        'register' => RegisterAttemptFilter::class,
        'verify-email' => VerifyEmailAttemptFilter::class,
        'islogged' => LoggedFilter::class
    ];

    // Always applied before every request
    public $globals = [
        'before' => [
            //'honeypot'
            'csrf',
        ],
        'after' => [
            'toolbar',
            //'honeypot'
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
