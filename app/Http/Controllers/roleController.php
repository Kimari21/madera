<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class roleController extends Controller
{
    public function list()
	{
		return view('list_role');
	}

	public function add()
	{
		return view('add_role');
	}

	public function edit($n)
	{
		return view('edit_role')->with('numero', $n);
	}

	public function supp($n)
	{
		return view('supp_role')->with('numero', $n);
	}
}
