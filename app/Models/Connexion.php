<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 11 Jan 2017 10:36:55 +0000.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Connexion
 * 
 * @property \Carbon\Carbon $Date_Connexion
 * @property int $Id_Connexion
 * @property int $Id_Utilisateurs
 * 
 * @property \App\Models\Utilisateur $utilisateur
 *
 * @package App\Models
 */
class Connexion extends Model
{
	protected $table = 'connexion';
	protected $primaryKey = 'Id_Connexion';
	public $timestamps = false;

	protected $casts = [
		'Id_Utilisateurs' => 'int'
	];

	protected $dates = [
		'Date_Connexion'
	];

	protected $fillable = [
		'Date_Connexion',
		'Id_Utilisateurs'
	];

	public function utilisateur()
	{
		return $this->belongsTo(\App\Models\Utilisateur::class, 'Id_Utilisateurs');
	}
}
