<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class caracteristiques_gammeController extends Controller
{
    public function list()
	{
		return view('list_caract_gamme');
	}

	public function add()
	{
		return view('add_caract_gamme');
	}

	public function edit($n)
	{
		return view('edit_caract_gamme')->with('numero', $n);
	}

	public function supp($n)
	{
		return view('supp_caract_gamme')->with('numero', $n);
	}
}
