<?php namespace App\Controllers\Authentication;

use App\Controllers\InitController;

class Register extends InitController
{
    public function index()
    {
        return view('App\Views\Authentication\Register', [
            'title' => 'Forgot Password'
        ]);
    }

    //--------------------------------------------------------------------
    public function registerAttempt()
    {
        return view('Authentication\Login', [
            'title' => 'Login'
        ]);
    }
}
