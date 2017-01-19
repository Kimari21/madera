<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class etatController extends Controller
{
     public function list()
	{
		return view('list_etat');
	}

	public function add()
	{
		return view('add_etat');
	}

	public function edit($n)
	{
		return view('edit_etat')->with('numero', $n);
	}

	public function supp($n)
	{
		return view('supp_etat')->with('numero', $n);
	}
}
