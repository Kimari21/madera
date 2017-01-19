<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class moduleController extends Controller
{
     public function list()
	{
		return view('list_module');
	}

	public function add()
	{
		return view('add_module');
	}

	public function edit($n)
	{
		return view('edit_module')->with('numero', $n);
	}

	public function supp($n)
	{
		return view('supp_module')->with('numero', $n);
	}
}
