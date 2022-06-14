<?php

namespace App\Controllers;
// use App\Models\CalonPasienModel;

class Home extends BaseController
{

	
	public function index()
	{
		// Mengambil Model Data
		$model = new \App\Models\CalonPasienModel();
		// Mengambil seluruh data array ataupun atribut terkait Calon Pasien
		$data = $model->findAll();
		return view('welcome_message');
	}
}