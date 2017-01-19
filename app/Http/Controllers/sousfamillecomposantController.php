<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class sousfamillecomposantController extends Controller
{
    public function list()
	{
		return view('list_sousfamillecomposant');
	}

	public function add()
	{
		return view('add_sousfamillecomposant');
	}

	public function edit($n)
	{
		return view('edit_sousfamillecomposant')->with('numero', $n);
	}

	public function supp($n)
	{
		return view('supp_sousfamillecomposant')->with('numero', $n);
	}
}
