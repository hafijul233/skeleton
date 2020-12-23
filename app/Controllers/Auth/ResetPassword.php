<?php namespace App\Controllers\Auth;

use App\Controllers\BaseController;

class ResetPassword extends BaseController
{
    public function index()
    {
        return view('App\Views\Auth\ResetPassword', [
            'title' => 'Reset Password'
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
