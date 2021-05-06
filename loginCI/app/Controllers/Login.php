<?php

namespace App\Controllers;

class Login extends BaseController
{
	public function index()
	{
		$data = [
			'title'		=> 'Home'
		];

		return view('home/index', $data);
	}
}
