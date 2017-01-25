<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 11 Jan 2017 10:36:55 +0000.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Module
 * 
 * @property int $Id_Module
 * @property int $Id_Gamme
 * @property string $Nom_Module
 * @property string $Nature_Module
 * @property string $Caracteristique_Module
 * @property string $Unite_Module
 * @property int $Quantite_Module
 * @property string $Proprietaire_Module
 * @property float $Hauteur_Module
 * @property float $Longueur_Module
 * @property float $AngleEntrant_Module
 * @property float $AngleSortant_Module
 * @property float $Epaisseur_Module
 * 
 * @property \App\Models\Gamme $gamme
 * @property \Illuminate\Database\Eloquent\Collection $composants
 * @property \Illuminate\Database\Eloquent\Collection $composes
 * @property \Illuminate\Database\Eloquent\Collection $photosmodules
 * @property \Illuminate\Database\Eloquent\Collection $possedes
 *
 * @package App\Models
 */
class Module extends Model
{
	protected $table = 'module';
	protected $primaryKey = 'Id_Module';
	public $timestamps = false;

	protected $casts = [
		'Id_Gamme' => 'int',
		'Quantite_Module' => 'int',
		'Hauteur_Module' => 'float',
		'Longueur_Module' => 'float',
		'AngleEntrant_Module' => 'float',
		'AngleSortant_Module' => 'float',
		'Epaisseur_Module' => 'float'
	];

	protected $fillable = [
		'Id_Gamme',
		'Nom_Module',
		'Nature_Module',
		'Caracteristique_Module',
		'Unite_Module',
		'Quantite_Module',
		'Proprietaire_Module',
		'Hauteur_Module',
		'Longueur_Module',
		'AngleEntrant_Module',
		'AngleSortant_Module',
		'Epaisseur_Module'
	];

	public function gamme()
	{
		return $this->belongsTo(\App\Models\Gamme::class, 'Id_Gamme');
	}

	public function composants()
	{
		return $this->hasMany(\App\Models\Composant::class, 'Id_Module');
	}

	public function composes()
	{
		return $this->hasMany(\App\Models\Compose::class, 'Id_Module');
	}

	public function photosmodules()
	{
		return $this->hasMany(\App\Models\Photosmodule::class, 'Id_Module');
	}

	public function possedes()
	{
		return $this->hasMany(\App\Models\Possede::class, 'Id_Module');
	}
}
