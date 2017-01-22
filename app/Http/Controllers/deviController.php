<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Quotation;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use App\Models;
use Carbon\Carbon;
	

class deviController extends Controller
{
    public function getlist()
	{
		 $devi = DB::table('devis')->get();

        return view('devi/list_devi', ['devi' => $devi]);
	}

	public function getadd()
	{
		
				 $client = DB::table('clients')->get();

        return view('devi/add_devi', ['client' => $client]);
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

	public function postadd(Request $formulaire)
	{
		return  DB::table('devis')->insert([
            'Id_Utilisateurs' => 1,
            'Id_Clients' => $formulaire['id_client'],
            'Id_Etat' => 1,
            'Id_Statut' => 0,
            'PrixTotal_Devis' => $formulaire['px_total'],
            'RemiseCommerciale_Devis' =>$formulaire['remise_commercial'],
            'DateCreation_Devis' => Carbon::now(),
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
