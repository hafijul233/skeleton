<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('ControlPanel\Dashboard', [
		    'title' => 'Dashboard'
        ]);
	}

	//--------------------------------------------------------------------

}
