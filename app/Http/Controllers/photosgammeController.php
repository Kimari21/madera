<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class photosgammeController extends Controller
{
    public function list()
	{
		return view('list_photosgamme');
	}

	public function add()
	{
		return view('add_photosgamme');
	}

	public function edit($n)
	{
		return view('edit_photosgamme')->with('numero', $n);
	}

	public function supp($n)
	{
		return view('supp_photosgamme')->with('numero', $n);
	}
}
