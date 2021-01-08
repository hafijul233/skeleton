<?php namespace App\Controllers\Authentication;

use App\Controllers\InitController;

class VerifyEmail extends InitController
{
    public function index()
    {
        return view('App\Views\Authentication\VerifyEmail', [
            'title' => 'Confirm Email Address'
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
