<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 11 Jan 2017 10:36:55 +0000.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Photosgamme
 * 
 * @property int $Id_PhotosGammes
 * @property int $Id_Gamme
 * @property string $LienPhotosServeur_PhotosGammes
 * @property \Carbon\Carbon $DateCreation_PhotosGammes
 * @property float $Poids_PhotosGammes
 * @property string $Legende_PhotosGammes
 * 
 * @property \App\Models\Gamme $gamme
 *
 * @package App\Models
 */
class Photosgamme extends Model
{
	protected $primaryKey = 'Id_PhotosGammes';
	public $timestamps = false;

	protected $casts = [
		'Id_Gamme' => 'int',
		'Poids_PhotosGammes' => 'float'
	];

	protected $dates = [
		'DateCreation_PhotosGammes'
	];

	protected $fillable = [
		'Id_Gamme',
		'LienPhotosServeur_PhotosGammes',
		'DateCreation_PhotosGammes',
		'Poids_PhotosGammes',
		'Legende_PhotosGammes'
	];

	public function gamme()
	{
		return $this->belongsTo(\App\Models\Gamme::class, 'Id_Gamme');
	}
}
