<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class deviController extends Controller
{
    public function list()
	{
		return view('list_devi');
	}

	public function add()
	{
		return view('add_devi');
	}

	public function edit($n)
	{
		return view('edit_devi')->with('numero', $n);
	}

	public function supp($n)
	{
		return view('supp_devi')->with('numero', $n);
	}
}
