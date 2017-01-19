<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class gammeController extends Controller
{
      public function list()
	{
		return view('list_gamme');
	}

	public function add()
	{
		return view('add_gamme');
	}

	public function edit($n)
	{
		return view('edit_gamme')->with('numero', $n);
	}

	public function supp($n)
	{
		return view('supp_gamme')->with('numero', $n);
	}
}
