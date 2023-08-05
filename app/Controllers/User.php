<?php

namespace App\Controllers;

class User extends BaseController
{
	public function index()
	{
		return view('auth/login');
	}

	public function login()
	{
		$username = "aing";
		$password = "12345678";

		
	}

	public function logout ()
	{
		return view('pages/login');
	}

	public function addUser()
	{

	} 
}