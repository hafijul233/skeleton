<?php namespace App\Controllers\Authentication;

use App\Controllers\InitController;
use App\Models\Authentication\LoginModel;

class Login extends InitController
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
        $credential = $this->request->getPost('credential');
        $password = $this->request->getPost('password');
        $rememberMe = $this->request->getPost('remember');

        // Determine credential type
        $type = filter_var($credential, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        $auth = new LoginModel();
        $auth->attempt(['type' => $type, 'credential' => $credential, 'password' => $password], $rememberMe);
    }
}
