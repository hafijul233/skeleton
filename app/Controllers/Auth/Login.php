<?php namespace App\Controllers\Auth;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function index()
    {
        toastr()->error('toasts', 'Title');

        return view('App\Views\Auth\Login', [
            'title' => 'Login'
        ]);
    }

    //--------------------------------------------------------------------
    public function loginAttempt()
    {
        return view('Auth\Login', [
            'title' => 'Login'
        ]);
    }
}
