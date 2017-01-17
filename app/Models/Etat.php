<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 11 Jan 2017 10:36:55 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Etat
 * 
 * @property int $Id_Etat
 * @property string $Description_Etat
 * 
 * @property \Illuminate\Database\Eloquent\Collection $devis
 *
 * @package App\Models
 */
class Etat extends Eloquent
{
	protected $table = 'etat';
	protected $primaryKey = 'Id_Etat';
	public $timestamps = false;

	protected $fillable = [
		'Description_Etat'
	];

	public function devis()
	{
		return $this->hasMany(\App\Models\Devi::class, 'Id_Etat');
	}
}
