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

	public function getdevi()
	{
		 $module = DB::table('module')->get();
		  $gamme = DB::table('gamme')->get();

				 
         return view('client/devi_client', ['gamme' => $gamme], ['module' => $module]);
    }


	public function postdevi(Request $formulaire)
	{
		 $prix_gamme = DB::table('gamme')->where('Id_Gamme', '=', $formulaire['gamme'])->first();
		  $prix_toit = DB::table('module')->where('Id_Module', '=', $formulaire['module_1'])->first();
		  $prix_sol = DB::table('module')->where('Id_Module', '=', $formulaire['module_2'])->first();
		  $prix_mur = DB::table('module')->where('Id_Module', '=', $formulaire['module_3'])->first();
		  $prix_terrasse = DB::table('module')->where('Id_Module', '=', $formulaire['module_4'])->first();
		  
				 
		  $prix_total = $prix_gamme->Prix_Gamme + $prix_toit->Prix_Module + $prix_sol->Prix_Module + $prix_mur->Prix_Module +$prix_terrasse->Prix_Module;

		   DB::table('devis')->insert([
			'Id_Devis' => 0,
            'Id_Utilisateurs' => 1,
            'Id_Clients' => 1,
            'Id_Etat' => 1,
            'DateCreation_Devis' => Carbon::now(),
            'Id_Statut' => 1,
            'PrixTotal_Devis' => $prix_total,
           
        ]);

		   $devi = DB::table('devis')->max('Id_Devis');

		   DB::table('compose')->insert([
			'Id_Compose' => 0,
            'Id_Devis' => $devi,
            'Id_Module' => $formulaire['module_1'],
                      
        ]);

DB::table('compose')->insert([
			'Id_Compose' => 0,
            'Id_Devis' => $devi,
            'Id_Module' => $formulaire['module_2'],
                      
        ]);

DB::table('compose')->insert([
			'Id_Compose' => 0,
            'Id_Devis' => $devi,
            'Id_Module' => $formulaire['module_3'],
                      
        ]);

DB::table('compose')->insert([
			'Id_Compose' => 0,
            'Id_Devis' => $devi,
            'Id_Module' => $formulaire['module_4'],
                      
        ]);


         return view('welcome');
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

         $client = DB::table('clients')->get();

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
