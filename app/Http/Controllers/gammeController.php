<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Quotation;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use App\Models\Gamme;

class gammeController extends Controller
{
public function getlist()
	{
		 $gamme = DB::table('gamme')->get();
		 $caract_gamme = DB::table('caracteristiques_gamme')->get();
        return view('gamme/list_gamme', ['gamme' => $gamme], ['caract_gamme' => $caract_gamme] );
	}

	public function getadd()
	{	
		 
		  $caract_gamme = DB::table('caracteristiques_gamme')->get();
		
		return view('gamme/add_gamme', ['caract_gamme' => $caract_gamme]);
	}

	public function getedit()
	{
		return view('edit_gamme');
	}

	public function getsupp()
	{
		return view('supp_gamme');
	}

	    public function postlist($formulaire)
	{
		return view('list_gamme');
	}

	public function postadd(Request $formulaire)
	{
		
		 DB::table('gamme')->insert([
			'Id_Gamme' => 0,
            'Id_CaracteristiquesGamme' => $formulaire['caract_gamme'],
            'Prix_Gamme' => $formulaire['prix_gamme'],
            'Nom_Gamme' =>$formulaire['nom_gamme'],
            
            'Proprietaire_Gamme' =>$formulaire['prop_gamme'],
      
        ]);

         $gamme = DB::table('gamme')->get();

        return view('gamme/list_gamme', ['gamme' => $gamme]);
	}

	public function postedit(Request $formulaire)
	{
		$gamme =  Gamme::findOrFail($formulaire['modifier']);
   		 
		  $caract_gamme = DB::table('caracteristiques_gamme')->get();
  		return view('gamme/edit_gamme', ['caract_gamme' => $caract_gamme], ['gamme' => $gamme] );
	}


	public function postvalidedit(Request $formulaire)
	{
		
			Gamme::where('Id_Gamme', $formulaire['Id_Gamme'])
		->update(['Id_CaracteristiquesGamme' => $formulaire['caract_gamme'], 'Prix_Gamme' => $formulaire['prix_gamme'],
			'Nom_Gamme' => $formulaire['nom_gamme'], 'Proprietaire_Gamme' =>$formulaire['prop_gamme']]);
		 

		
		
		 $gamme = DB::table('gamme')->get();

       return redirect('list_gamme'); 
	}

	public function postsupp(Request $formulaire)
	{

		DB::table('gamme')->where('Id_Gamme', '=', $formulaire['supprimer'])->delete();
		 $gamme = DB::table('gamme')->get();

       return redirect('list_gamme'); 
	}

}
?>
