<?php namespace App\Controllers\Authentication;

use App\Controllers\BaseController;

class Logout extends BaseController
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
