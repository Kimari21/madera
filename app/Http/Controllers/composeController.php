<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class composeController extends Controller
{
     public function list()
	{
		return view('list_compose');
	}

	public function add()
	{
		return view('add_compose');
	}

	public function edit($n)
	{
		return view('edit_compose')->with('numero', $n);
	}

	public function supp($n)
	{
		return view('supp_compose')->with('numero', $n);
	}
}
