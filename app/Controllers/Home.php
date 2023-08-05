<?php

namespace App\Controllers;

use CodeIgniter\Config\View as ConfigView;
use CodeIgniter\Debug\Toolbar\Collectors\Views;
use CodeIgniter\View\View as ViewView;
use Config\View;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'tittle' => 'SIKASEP | Dashboard',
			'header' => 'Dashboard'
		];
		return View('pages/dashboard', $data);
	}

	public function logout()
	{
	}
	public function adduser()
	{
	}
}
