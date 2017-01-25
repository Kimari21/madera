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

        return view('gamme/list_gamme', ['gamme' => $gamme]);
	}

	public function getadd()
	{	
		 
		  $caract_gamme = DB::table('caracteristiques_gamme')->whereNotIn('Id_CaracteristiquesGamme',DB::table('caracteristiques_gamme')->select('gamme.Id_CaracteristiquesGamme')->join('gamme', 'caracteristiques_gamme.Id_CaracteristiquesGamme', '=', 'gamme.Id_CaracteristiquesGamme'))->get();
		
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
   		 
		  $caract_gamme = DB::table('caracteristiques_gamme')->whereNotIn('Id_CaracteristiquesGamme',DB::table('caracteristiques_gamme')->select('gamme.Id_CaracteristiquesGamme')->join('gamme', 'caracteristiques_gamme.Id_CaracteristiquesGamme', '=', 'gamme.Id_CaracteristiquesGamme'))->get();
  		return view('gamme/edit_gamme', ['caract_gamme' => $caract_gamme], ['gamme' => $gamme] );
	}

	public function postsupp(Request $formulaire)
	{

		DB::table('gamme')->where('Id_Gamme', '=', $formulaire['supprimer'])->delete();
		 $gamme = DB::table('gamme')->get();

       return redirect('list_gamme'); 
	}

}
