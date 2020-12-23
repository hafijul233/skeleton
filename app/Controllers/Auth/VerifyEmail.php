<?php namespace App\Controllers\Auth;

use App\Controllers\BaseController;

class VerifyEmail extends BaseController
{
    public function index()
    {
        return view('App\Views\Auth\VerifyEmail', [
            'title' => 'Confirm Email Address'
        ]);
    }

    //--------------------------------------------------------------------
    public function resetAttempt()
    {
        return view('Auth\Login', [
            'title' => 'Login'
        ]);
    }
}
