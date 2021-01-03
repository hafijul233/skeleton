<?php namespace App\Controllers\Auth;

use App\Controllers\BaseController;

class Logout extends BaseController
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
        dd($this->request->getPost());
        return view('Auth\Login', [
            'title' => 'Login'
        ]);
    }
}
