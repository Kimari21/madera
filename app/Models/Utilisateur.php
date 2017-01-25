<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 11 Jan 2017 10:36:55 +0000.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Utilisateur
 * 
 * @property int $Id_Utilisateurs
 * @property int $Id_Role
 * @property string $Nom_Utilisateurs
 * @property string $Prenom_Utilisateurs
 * @property string $Mail_Utilisateurs
 * @property string $Telephone_Utilisateurs
 * @property \Carbon\Carbon $LastConnexion_Utilisateurs
 * @property string $CodePostal_Utilisateurs
 * @property string $Adresse_Utilisateurs
 * @property string $Pwd_Utilisateurs
 * 
 * @property \App\Models\Role $role
 * @property \Illuminate\Database\Eloquent\Collection $connexions
 * @property \Illuminate\Database\Eloquent\Collection $devis
 *
 * @package App\Models
 */
class Utilisateur extends Model
{
	protected $primaryKey = 'Id_Utilisateurs';
	public $timestamps = false;

	protected $casts = [
		'Id_Role' => 'int'
	];

	protected $dates = [
		'LastConnexion_Utilisateurs'
	];

	protected $fillable = [
		'Id_Role',
		'Nom_Utilisateurs',
		'Prenom_Utilisateurs',
		'Mail_Utilisateurs',
		'Telephone_Utilisateurs',
		'LastConnexion_Utilisateurs',
		'CodePostal_Utilisateurs',
		'Adresse_Utilisateurs',
		'Pwd_Utilisateurs'
	];

	public function role()
	{
		return $this->belongsTo(\App\Models\Role::class, 'Id_Role');
	}

	public function connexions()
	{
		return $this->hasMany(\App\Models\Connexion::class, 'Id_Utilisateurs');
	}

	public function devis()
	{
		return $this->hasMany(\App\Models\Devi::class, 'Id_Utilisateurs');
	}
}
