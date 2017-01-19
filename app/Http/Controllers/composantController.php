<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class composantController extends Controller
{
     public function list()
	{
		return view('list_composant');
	}

	public function add()
	{
		return view('add_composant');
	}

	public function edit($n)
	{
		return view('edit_composant')->with('numero', $n);
	}

	public function supp($n)
	{
		return view('supp_composant')->with('numero', $n);
	}
}
