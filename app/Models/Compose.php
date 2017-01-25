<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 11 Jan 2017 10:36:55 +0000.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Compose
 * 
 * @property int $Id_Compose
 * @property int $Id_Devis
 * @property int $Id_Module
 * 
 * @property \App\Models\Devi $devi
 * @property \App\Models\Module $module
 *
 * @package App\Models
 */
class Compose extends Model
{
	protected $table = 'compose';
	protected $primaryKey = 'Id_Compose';
	public $timestamps = false;

	protected $casts = [
		'Id_Devis' => 'int',
		'Id_Module' => 'int'
	];

	protected $fillable = [
		'Id_Devis',
		'Id_Module'
	];

	public function devi()
	{
		return $this->belongsTo(\App\Models\Devi::class, 'Id_Devis');
	}

	public function module()
	{
		return $this->belongsTo(\App\Models\Module::class, 'Id_Module');
	}
}
