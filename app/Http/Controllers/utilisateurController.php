<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class utilisateurController extends Controller
{
    public function list()
	{
		return view('list_utilisateur');
	}

	public function add()
	{
		return view('add_utilisateur');
	}

	public function edit($n)
	{
		return view('edit_utilisateur')->with('numero', $n);
	}

	public function supp($n)
	{
		return view('supp_utilisateur')->with('numero', $n);
	}
}
