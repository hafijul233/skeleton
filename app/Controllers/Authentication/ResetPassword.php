<?php namespace App\Controllers\Authentication;

use App\Controllers\InitController;

class ResetPassword extends InitController
{
    public function index()
    {
        return view('App\Views\Authentication\ResetPassword', [
            'title' => 'Reset Password'
        ]);
    }

    //--------------------------------------------------------------------
    public function resetAttempt()
    {
        return view('Authentication\Login', [
            'title' => 'Login'
        ]);
    }
}
