<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Quotation;
use App\Http\Requests;

class deviController extends Controller
{
    public function getlist()
	{
		 $devi = DB::table('devis')->get();

        return view('devi/list_devi', ['devi' => $devi]);
	}

	public function getadd()
	{
		return view('devi/formulaire_devi');
	}

	public function getedit()
	{
		return view('edit_devi');
	}

	public function getsupp()
	{
		return view('supp_devi');
	}

	    public function postlist($formulaire)
	{
		return view('list_devi');
	}

	public function postadd($formulaire)
	{
		return Devi::create([
            'Id_Utilisateurs' => $session['id'],
            'Id_Clients' => $formulaire['id_client'],
            'Id_Etat' =>$formulaire['id_etat'],
            'Id_Statut' => 0,
            'PrixTotal_Devis' => $formulaire['px_total'],
            'RemiseCommerciale_Devis' =>$formulaire['remise_commercial'],
            'DateCreation_Devis' => Carbon\Carbon::now(),
        ]);

        		 $devi = DB::table('devis')->get();

        return view('devi/list_devi', ['devi' => $devi]);

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
