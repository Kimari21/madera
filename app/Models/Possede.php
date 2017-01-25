<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 11 Jan 2017 10:36:55 +0000.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Possede
 * 
 * @property int $Id_Possede
 * @property int $Id_Composants
 * @property int $Id_Module
 * 
 * @property \App\Models\Composant $composant
 * @property \App\Models\Module $module
 *
 * @package App\Models
 */
class Possede extends Model
{
	protected $table = 'possede';
	protected $primaryKey = 'Id_Possede';
	public $timestamps = false;

	protected $casts = [
		'Id_Composants' => 'int',
		'Id_Module' => 'int'
	];

	protected $fillable = [
		'Id_Composants',
		'Id_Module'
	];

	public function composant()
	{
		return $this->belongsTo(\App\Models\Composant::class, 'Id_Composants');
	}

	public function module()
	{
		return $this->belongsTo(\App\Models\Module::class, 'Id_Module');
	}
}
