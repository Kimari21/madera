<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Quotation;
use App\Http\Requests;

class statutController extends Controller
{
    public function list()
	{
		return view('list_statut');
	}

	public function add()
	{
		return view('add_statut');
	}

	public function edit($n)
	{
		return view('edit_statut')->with('numero', $n);
	}

	public function supp($n)
	{
		return view('supp_statut')->with('numero', $n);
	}
}
