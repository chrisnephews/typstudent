<?php

namespace App\Http\Controllers;


class UserController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	} //
}
