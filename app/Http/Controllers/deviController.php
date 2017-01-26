<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Quotation;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use App\Models\Devi;
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
		
		DB::table('devis')->insert([
            'Id_Utilisateurs' => 1,
            'Id_Clients' => $formulaire['id_client'],
            'Id_Etat' => 1,
            'Id_Statut' => 1,
            'PrixTotal_Devis' => $formulaire['px_total'],
            'RemiseCommerciale_Devis' =>$formulaire['remise_commercial'],
            'DateCreation_Devis' => Carbon::now(),
        ]);
		
      
        		 $devi = DB::table('devis')->get;
        return view('devi/list_devi', ['devi' => $devi]);

	}

		public function postedit(Request $formulaire)
		{ 

			$devi =  Devi::findOrFail($formulaire['modifier']);
   		 
		$client = DB::table('clients')->get();
		$statut = DB::table('statut')->get();
		$etat = DB::table('etat')->get();
  		return view('devi/edit_devi', ['devi' => $devi, 'client' => $client,'etat' => $etat ,'statut' => $statut] );
		}

	public function postvalidedit(Request $formulaire)
	{
		
			Devi::where('Id_Devis', $formulaire['Id_Devis'])
		->update(['Id_Clients' => $formulaire['Id_Clients'], 'Id_Etat' => $formulaire['Id_Etat'],
			'DateModification_Devis' => Carbon::now(), 'Id_Statut' =>$formulaire['Id_Statut'], 'PrixTotal_Devis' =>$formulaire['PrixTotal_Devis'], 'RemiseCommerciale_Devis' =>$formulaire['RemiseCommerciale_Devis']]);
		 

		
		
		 $devi = DB::table('devis')->get();

       return redirect('list_devi'); 
	}

	public function postsupp(Request $formulaire)
	{
				DB::table('devis')->where('Id_Devis', '=', $formulaire['supprimer'])->delete();
		 $devi = DB::table('devis')->get();

       return redirect('list_devi'); 
	}
}
