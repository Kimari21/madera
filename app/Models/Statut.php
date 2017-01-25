<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 11 Jan 2017 10:36:55 +0000.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Statut
 * 
 * @property int $Id_Statut
 * @property string $Description_Statut
 * 
 * @property \Illuminate\Database\Eloquent\Collection $devis
 *
 * @package App\Models
 */
class Statut extends Model
{
	protected $table = 'statut';
	protected $primaryKey = 'Id_Statut';
	public $timestamps = false;

	protected $fillable = [
		'Description_Statut'
	];

	public function devis()
	{
		return $this->hasMany(\App\Models\Devi::class, 'Id_Statut');
	}
}
