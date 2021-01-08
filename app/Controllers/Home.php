<?php namespace App\Controllers;

class Home extends InitController
{
    public function index()
    {
        return view('ControlPanel\Dashboard', [
            'title' => 'Dashboard'
        ]);
    }

    //--------------------------------------------------------------------

}
