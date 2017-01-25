<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 11 Jan 2017 10:36:55 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Devi
 * 
 * @property int $Id_Devis
 * @property int $Id_Utilisateurs
 * @property int $Id_Clients
 * @property int $Id_Etat
 * @property \Carbon\Carbon $DateCreation_Devis
 * @property \Carbon\Carbon $DateModification_Devis
 * @property int $Id_Statut
 * @property float $PrixTotal_Devis
 * @property int $RemiseCommerciale_Devis
 * 
 * @property \App\Models\Utilisateur $utilisateur
 * @property \App\Models\Client $client
 * @property \App\Models\Etat $etat
 * @property \App\Models\Statut $statut
 * @property \Illuminate\Database\Eloquent\Collection $composes
 *
 * @package App\Models
 */
class Devi extends Eloquent
{
	use FormAccessible;
	protected $primaryKey = 'Id_Devis';
	public $timestamps = false;

	protected $casts = [
		'Id_Utilisateurs' => 'int',
		'Id_Clients' => 'int',
		'Id_Etat' => 'int',
		'Id_Statut' => 'int',
		'PrixTotal_Devis' => 'float',
		'RemiseCommerciale_Devis' => 'int'
	];

	protected $dates = [
		'DateCreation_Devis',
		'DateModification_Devis'
	];

	protected $fillable = [
		'Id_Utilisateurs',
		'Id_Clients',
		'Id_Etat',
		'DateCreation_Devis',
		'DateModification_Devis',
		'Id_Statut',
		'PrixTotal_Devis',
		'RemiseCommerciale_Devis'
	];

	public function utilisateur()
	{
		return $this->belongsTo(\App\Models\Utilisateur::class, 'Id_Utilisateurs');
	}

	public function client()
	{
		return $this->belongsTo(\App\Models\Client::class, 'Id_Clients');
	}

	public function etat()
	{
		return $this->belongsTo(\App\Models\Etat::class, 'Id_Etat');
	}

	public function statut()
	{
		return $this->belongsTo(\App\Models\Statut::class, 'Id_Statut');
	}

	public function composes()
	{
		return $this->hasMany(\App\Models\Compose::class, 'Id_Devis');
	}

	protected $hidden = array(
      'Id_Utilisateurs',
		'Id_Clients',
		'Id_Etat',
		'DateCreation_Devis',
		'DateModification_Devis',
		'Id_Statut',
		'PrixTotal_Devis',
		'RemiseCommerciale_Devis'
    );
}
