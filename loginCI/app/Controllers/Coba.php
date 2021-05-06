<?php

namespace App\Controllers;

class Coba extends BaseController
{
	public function index() {

		$data = [
			'title'		=> 'Coba',
		];

		return view('coba/index', $data);
	}
}

