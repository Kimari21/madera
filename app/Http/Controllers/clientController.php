<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Quotation;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use App\Models\Client;
use Carbon\Carbon;

class clientController extends Controller
{
     public function getlist()
	{
		 $client = DB::table('clients')->get();

        return view('client/list_client', ['client' => $client]);
	}

	public function getadd()
	{
		
				 
        return view('client/add_client');
    }

public function postadd(Request $formulaire)
	{
	
			  DB::table('clients')->insert([
			'Id_Clients' => 0,
            'Nom_Clients' => $formulaire['nom_client'],
            'Prenom_Clients' => $formulaire['prenom_client'],
            'Mail_Clients' =>$formulaire['mail_client'],

            'TelephoneDomicile_Clients' => $formulaire['tel_domicile'],
            'TelephonePortable_Clients' => $formulaire['tel_portable'],
            'Adresse_Clients' =>$formulaire['adresse_client'],
            
            'Ville_Clients' =>$formulaire['ville_client'],           
            'CodePostal_Clients' =>$formulaire['code_postal'],
      
        ]);

         $client = DB::table('client')->get();

        return view('client/list_client', ['client' => $client]);
	}

		public function postedit(Request $formulaire)
		{ 
			$client =  Client::findOrFail($formulaire['modifier']);
   		 
  		return view('client/edit_client', compact('client'));
		}


	public function postvalidedit(Request $formulaire)
	{
		
			Client::where('Id_Clients', $formulaire['Id_Clients'])
		->update(['Nom_Clients' => $formulaire['Nom_Clients'], 'Prenom_Clients' => $formulaire['Prenom_Clients'],
			'Mail_Clients' =>$formulaire['Mail_Clients'], 'TelephoneDomicile_Clients' =>$formulaire['TelephoneDomicile_Clients'], 'TelephonePortable_Clients' =>$formulaire['TelephonePortable_Clients'], 'Adresse_Clients' =>$formulaire['Adresse_Clients'], 'Ville_Clients' =>$formulaire['Ville_Clients'], 'CodePostal_Clients' =>$formulaire['CodePostal_Clients']]);
		 

		
		
		 $client = DB::table('clients')->get();

       return redirect('list_client'); 
	}


		public function postsupp(Request $formulaire)
	{
		
		DB::table('clients')->where('Id_Clients', '=', $formulaire['supprimer'])->delete();
		 $client = DB::table('clients')->get();

       return redirect('list_client'); 
	}
}
