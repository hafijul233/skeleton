<?php namespace App\Controllers\Authentication;

use App\Controllers\BaseController;

class VerifyEmail extends BaseController
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
