<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class connexionController extends Controller
{
     public function list()
	{
		return view('list_connexion');
	}

	public function add()
	{
		return view('add_connexion');
	}

	public function edit($n)
	{
		return view('edit_connexion')->with('numero', $n);
	}

	public function supp($n)
	{
		return view('supp_connexion')->with('numero', $n);
	}
}
