<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class possedeController extends Controller
{
    public function list()
	{
		return view('list_possede');
	}

	public function add()
	{
		return view('add_possede');
	}

	public function edit($n)
	{
		return view('edit_possede')->with('numero', $n);
	}

	public function supp($n)
	{
		return view('supp_possede')->with('numero', $n);
	}
}
