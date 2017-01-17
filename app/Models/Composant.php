<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 11 Jan 2017 10:36:55 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Composant
 * 
 * @property int $Id_Composants
 * @property string $Nom_Composants
 * @property int $Id_SousFamilleComposants
 * @property int $Id_Fournisseurs
 * @property int $Id_Module
 * @property string $Nature_Composants
 * @property string $Caracteristiques_Composants
 * @property string $Unite_Composants
 * @property float $PrixUnitaire_Composants
 * @property int $Quantite_Composants
 * @property string $Proprietaire_Composants
 * @property float $Section_Composants
 * @property float $Epaisseur_Composants
 * @property float $Largeur_Composants
 * @property float $Longueur_Composants
 * 
 * @property \App\Models\Fournisseur $fournisseur
 * @property \App\Models\Module $module
 * @property \App\Models\Sousfamillecomposant $sousfamillecomposant
 * @property \Illuminate\Database\Eloquent\Collection $possedes
 *
 * @package App\Models
 */
class Composant extends Eloquent
{
	protected $primaryKey = 'Id_Composants';
	public $timestamps = false;

	protected $casts = [
		'Id_SousFamilleComposants' => 'int',
		'Id_Fournisseurs' => 'int',
		'Id_Module' => 'int',
		'PrixUnitaire_Composants' => 'float',
		'Quantite_Composants' => 'int',
		'Section_Composants' => 'float',
		'Epaisseur_Composants' => 'float',
		'Largeur_Composants' => 'float',
		'Longueur_Composants' => 'float'
	];

	protected $fillable = [
		'Nom_Composants',
		'Id_SousFamilleComposants',
		'Id_Fournisseurs',
		'Id_Module',
		'Nature_Composants',
		'Caracteristiques_Composants',
		'Unite_Composants',
		'PrixUnitaire_Composants',
		'Quantite_Composants',
		'Proprietaire_Composants',
		'Section_Composants',
		'Epaisseur_Composants',
		'Largeur_Composants',
		'Longueur_Composants'
	];

	public function fournisseur()
	{
		return $this->belongsTo(\App\Models\Fournisseur::class, 'Id_Fournisseurs');
	}

	public function module()
	{
		return $this->belongsTo(\App\Models\Module::class, 'Id_Module');
	}

	public function sousfamillecomposant()
	{
		return $this->belongsTo(\App\Models\Sousfamillecomposant::class, 'Id_SousFamilleComposants');
	}

	public function possedes()
	{
		return $this->hasMany(\App\Models\Possede::class, 'Id_Composants');
	}
}
