<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class fournisseurController extends Controller
{
     public function list()
	{
		return view('list_fournisseur');
	}

	public function add()
	{
		return view('add_fournisseur');
	}

	public function edit($n)
	{
		return view('edit_fournisseur')->with('numero', $n);
	}

	public function supp($n)
	{
		return view('supp_fournisseur')->with('numero', $n);
	}
}
