<?php namespace App\Controllers\Auth;

use App\Controllers\BaseController;

class ForgotPassword extends BaseController
{
    public function index()
    {
        return view('App\Views\Auth\ForgotPassword', [
            'title' => 'Forgot Password'
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
