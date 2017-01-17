<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 11 Jan 2017 10:36:55 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Famillecomposant
 * 
 * @property int $Id_FamilleComposants
 * @property string $Nom_FamilleComposants
 * 
 * @property \Illuminate\Database\Eloquent\Collection $sousfamillecomposants
 *
 * @package App\Models
 */
class Famillecomposant extends Eloquent
{
	protected $primaryKey = 'Id_FamilleComposants';
	public $timestamps = false;

	protected $fillable = [
		'Nom_FamilleComposants'
	];

	public function sousfamillecomposants()
	{
		return $this->hasMany(\App\Models\Sousfamillecomposant::class, 'Id_FamilleComposants');
	}
}
