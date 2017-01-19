<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class clientController extends Controller
{
     public function list()
	{
		return view('list_client');
	}

	public function add()
	{
		return view('add_client');
	}

	public function edit($n)
	{
		return view('edit_client')->with('numero', $n);
	}

	public function supp($n)
	{
		return view('supp_client')->with('numero', $n);
	}
}
