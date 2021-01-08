<?php namespace App\Controllers\Authentication;

use App\Controllers\InitController;

class ForgotPassword extends InitController
{
    public function index()
    {
        return view('App\Views\Authentication\ForgotPassword', [
            'title' => 'Forgot Password'
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
