<?php namespace App\Controllers\Authentication;

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
