<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class photosphotosmoduleController extends Controller
{
    public function list()
	{
		return view('list_photosmodule');
	}

	public function add()
	{
		return view('add_photosmodule');
	}

	public function edit($n)
	{
		return view('edit_photosmodule')->with('numero', $n);
	}

	public function supp($n)
	{
		return view('supp_photosmodule')->with('numero', $n);
	}
}
