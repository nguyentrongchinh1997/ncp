<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SPDomainController extends Controller
{
	
	public function index(Request $request)
	{
		$query = (!empty($request->get('query')) ? str_replace(' ', '', $request->get('query')) : NULL);
		
		return view('/sanpham/sanphamdomain', compact('query'));
	}
}