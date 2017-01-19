<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class deviController extends Controller
{
    public function getlist()
	{
		return view('list_devi');
	}

	public function getadd()
	{
		return view('devi/formulaire_devi');
	}

	public function getedit($n)
	{
		return view('edit_devi')->with('numero', $n);
	}

	public function getsupp($n)
	{
		return view('supp_devi')->with('numero', $n);
	}

	    public function postlist()
	{
		return view('list_devi');
	}

	public function postadd()
	{
		return view('formulaire_devi');
	}

	public function postedit($n)
	{
		return view('edit_devi')->with('numero', $n);
	}

	public function postsupp($n)
	{
		return view('supp_devi')->with('numero', $n);
	}
}
