<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 11 Jan 2017 10:36:55 +0000.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
class Etat extends Model
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
