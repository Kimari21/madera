<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 11 Jan 2017 10:36:55 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CaracteristiquesGamme
 * 
 * @property int $Id_CaracteristiquesGamme
 * @property string $Nom_Caractéristiques_Gamme
 * @property string $Famille_Caractéristiques_Gamme
 * @property string $RegleCalcul_Gamme
 * @property string $FinitionExterieur_Gamme
 * @property string $TypeIsolant_Gamme
 * @property string $TypeCouverture_Gamme
 * 
 * @property \Illuminate\Database\Eloquent\Collection $gammes
 *
 * @package App\Models
 */
class CaracteristiquesGamme extends Eloquent
{
	protected $table = 'caracteristiques_gamme';
	protected $primaryKey = 'Id_CaracteristiquesGamme';
	public $timestamps = false;

	protected $fillable = [
		'Nom_Caractéristiques_Gamme',
		'Famille_Caractéristiques_Gamme',
		'RegleCalcul_Gamme',
		'FinitionExterieur_Gamme',
		'TypeIsolant_Gamme',
		'TypeCouverture_Gamme'
	];

	public function gammes()
	{
		return $this->hasMany(\App\Models\Gamme::class, 'Id_CaracteristiquesGamme');
	}
}
