<?php namespace App\Controllers\Authentication;

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
    public function registerAttempt()
    {
        return view('Auth\Login', [
            'title' => 'Login'
        ]);
    }
}
