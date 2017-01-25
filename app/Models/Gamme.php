<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 11 Jan 2017 10:36:55 +0000.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Gamme
 * 
 * @property int $Id_Gamme
 * @property int $Id_CaracteristiquesGamme
 * @property string $Nom_Gamme
 * @property int $Prix_Gamme
 * @property string $Proprietaire_Gamme
 * 
 * @property \App\Models\CaracteristiquesGamme $caracteristiques_gamme
 * @property \Illuminate\Database\Eloquent\Collection $modules
 * @property \Illuminate\Database\Eloquent\Collection $photosgammes
 *
 * @package App\Models
 */
class Gamme extends Model
{
	protected $table = 'gamme';
	protected $primaryKey = 'Id_Gamme';
	public $timestamps = false;

	protected $casts = [
		'Id_CaracteristiquesGamme' => 'int',
		'Prix_Gamme' => 'int'
	];

	protected $fillable = [
		'Id_CaracteristiquesGamme',
		'Nom_Gamme',
		'Prix_Gamme',
		'Proprietaire_Gamme'
	];

	public function caracteristiques_gamme()
	{
		return $this->belongsTo(\App\Models\CaracteristiquesGamme::class, 'Id_CaracteristiquesGamme');
	}

	public function modules()
	{
		return $this->hasMany(\App\Models\Module::class, 'Id_Gamme');
	}

	public function photosgammes()
	{
		return $this->hasMany(\App\Models\Photosgamme::class, 'Id_Gamme');
	}
}
