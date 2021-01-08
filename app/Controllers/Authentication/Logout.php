<?php namespace App\Controllers\Authentication;

use App\Controllers\InitController;

class Logout extends InitController
{
    public function index()
    {
        return view('App\Views\Authentication\Login', [
            'title' => 'Login'
        ]);
    }

    //--------------------------------------------------------------------
    public function loginAttempt()
    {
        dd($this->request->getPost());
        return view('Authentication\Login', [
            'title' => 'Login'
        ]);
    }
}
