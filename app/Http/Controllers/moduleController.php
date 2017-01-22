<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Quotation;
use App\Http\Requests;

class moduleController extends Controller
{
    public function getlist()
	{
		 $module = DB::table('module')->get();

        return view('module/list_module', ['module' => $module]);
	}

	public function getadd()
	{
		
		  $gamme = DB::table('gamme')->get();
		
		return view('module/add_module', ['gamme' => $gamme]);
	}

	public function getedit()
	{
		return view('edit_module');
	}

	public function getsupp()
	{
		return view('supp_module');
	}

	    public function postlist($formulaire)
	{
		return view('list_module');
	}

	public function postadd(Request $formulaire)
	{
		return  DB::table('module')->insert([
            'Id_Module' => 0,
            'Id_Gamme' => $formulaire['Id_Gamme'],
            'Nom_Module' =>$formulaire['Nom_Module'],
            'Nature_Module' => $formulaire['Nature_Module'],
            'Caracteristique_Module' => $formulaire['Caracteristique_Module'],
            'Unite_Module' =>$formulaire['Unite_Module'],
            'Quantite_module' => $formulaire['Quantite_module'],
            'Proprietaire_Module' => $formulaire['Proprietaire_Module'],
            'Hauteur_Module' => $formulaire['Hauteur_Module'],
            'Longueur_Module' =>$formulaire['Longueur_Module'],
            'AngleEntrant_Module' => $formulaire['AngleEntrant_Module'],
            'AngleSortant_Module' => $formulaire['AngleSortant_Module'],
            'Epaisseur_Module' =>$formulaire['Epaisseur_Module'],
        ]);
		 $module = DB::table('module')->get();

        return view('module/list_module', ['module' => $module]);
	}

	public function postedit($n)
	{
		return view('edit_module')->with('numero', $n);
	}

	public function postsupp(Request $formulaire)
	{
		DB::table('module')->where('Id_Module', '=', $formulaire['supprimer'])->delete();
		 $module = DB::table('module')->get();

       return redirect('list_module'); 
	}
}
