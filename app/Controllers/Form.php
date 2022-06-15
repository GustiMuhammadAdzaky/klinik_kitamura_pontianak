<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Form extends BaseController
{
	public function index()
	{
		$data = [
			"title" => "Form",
		];
		return view('form/index', $data);
	}
}