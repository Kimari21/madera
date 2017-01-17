<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 11 Jan 2017 10:36:55 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Fournisseur
 * 
 * @property int $Id_Fournisseurs
 * @property string $Nom_Fournisseurs
 * @property string $Mail_Fournisseurs
 * @property string $Adresse_Fournisseurs
 * @property string $CodePostal_Fournisseurs
 * @property string $Ville_Fournisseurs
 * @property string $Telephone_Fournisseurs
 * @property string $Fax_Fournisseurs
 * @property string $NumSIRET_Fournisseurs
 * 
 * @property \Illuminate\Database\Eloquent\Collection $composants
 *
 * @package App\Models
 */
class Fournisseur extends Eloquent
{
	protected $primaryKey = 'Id_Fournisseurs';
	public $timestamps = false;

	protected $fillable = [
		'Nom_Fournisseurs',
		'Mail_Fournisseurs',
		'Adresse_Fournisseurs',
		'CodePostal_Fournisseurs',
		'Ville_Fournisseurs',
		'Telephone_Fournisseurs',
		'Fax_Fournisseurs',
		'NumSIRET_Fournisseurs'
	];

	public function composants()
	{
		return $this->hasMany(\App\Models\Composant::class, 'Id_Fournisseurs');
	}
}
