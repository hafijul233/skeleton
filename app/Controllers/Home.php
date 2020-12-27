<?php namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        dd(service('toastr'));

        return view('ControlPanel\Dashboard', [
            'title' => 'Dashboard'
        ]);
    }

    //--------------------------------------------------------------------

}
