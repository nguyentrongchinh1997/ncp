<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SPDomainController extends Controller
{
	
	public function index()
	{
		return view('/sanpham/sanphamdomain');
	}
}