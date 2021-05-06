<?php

namespace App\Controllers;

class Home extends BaseController
{
	// public function index()
	// {
	// protected $tesModel;
 //    public function __construct()
    // {
    //     $this->tesModel = new tesModel();
    // }
	public function index() {
		$data = [
			'title'		=> 'Home',
			// 'tes'		=> $this->tesModel
		];

		return view('home/index', $data);
	}
}
