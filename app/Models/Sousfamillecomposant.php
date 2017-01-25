<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 11 Jan 2017 10:36:55 +0000.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sousfamillecomposant
 * 
 * @property int $Id_SousFamilleComposants
 * @property string $Nom_SousFamilleComposant
 * @property int $Id_FamilleComposants
 * 
 * @property \App\Models\Famillecomposant $famillecomposant
 * @property \Illuminate\Database\Eloquent\Collection $composants
 *
 * @package App\Models
 */
class Sousfamillecomposant extends Model
{
	protected $primaryKey = 'Id_SousFamilleComposants';
	public $timestamps = false;

	protected $casts = [
		'Id_FamilleComposants' => 'int'
	];

	protected $fillable = [
		'Nom_SousFamilleComposant',
		'Id_FamilleComposants'
	];

	public function famillecomposant()
	{
		return $this->belongsTo(\App\Models\Famillecomposant::class, 'Id_FamilleComposants');
	}

	public function composants()
	{
		return $this->hasMany(\App\Models\Composant::class, 'Id_SousFamilleComposants');
	}
}
