<?php namespace App\Controllers\Authentication;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function index()
    {
        return view('App\Views\Auth\Login', [
            'title' => 'Login'
        ]);
    }

    //--------------------------------------------------------------------
    public function loginAttempt()
    {

    }
}
