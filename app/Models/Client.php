<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 11 Jan 2017 10:36:55 +0000.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Client
 * 
 * @property int $Id_Clients
 * @property string $Nom_Clients
 * @property string $Prenom_Clients
 * @property string $Mail_Clients
 * @property string $TelephoneDomicile_Clients
 * @property string $TelephonePortable_Clients
 * @property string $Adresse_Clients
 * @property string $Ville_Clients
 * @property int $CodePostal_Clients
 * 
 * @property \Illuminate\Database\Eloquent\Collection $devis
 *
 * @package App\Models
 */
class Client extends Model
{
	protected $primaryKey = 'Id_Clients';
	public $timestamps = false;

	protected $casts = [
		'CodePostal_Clients' => 'int'
	];

	protected $fillable = [
		'Nom_Clients',
		'Prenom_Clients',
		'Mail_Clients',
		'TelephoneDomicile_Clients',
		'TelephonePortable_Clients',
		'Adresse_Clients',
		'Ville_Clients',
		'CodePostal_Clients'
	];

	public function devis()
	{
		return $this->hasMany(\App\Models\Devi::class, 'Id_Clients');
	}
}
