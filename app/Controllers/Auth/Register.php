<?php namespace App\Controllers\Auth;

use App\Controllers\BaseController;

class Register extends BaseController
{
    public function index()
    {
        return view('App\Views\Auth\Register', [
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
