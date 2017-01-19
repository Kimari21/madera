<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class famillecomposantController extends Controller
{
    public function list()
	{
		return view('list_famillecomposant');
	}

	public function add()
	{
		return view('add_famillecomposant');
	}

	public function edit($n)
	{
		return view('edit_famillecomposant')->with('numero', $n);
	}

	public function supp($n)
	{
		return view('supp_famillecomposant')->with('numero', $n);
	}
}
