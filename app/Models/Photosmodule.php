<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 11 Jan 2017 10:36:55 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Photosmodule
 * 
 * @property int $Id_PhotosModule
 * @property int $Id_Module
 * @property string $LienPhotosServeur_PhotosModule
 * @property \Carbon\Carbon $DateCreation_PhotosModules
 * @property float $Poids_PhotosModules
 * @property string $Legende_PhotosModules
 * 
 * @property \App\Models\Module $module
 *
 * @package App\Models
 */
class Photosmodule extends Eloquent
{
	protected $primaryKey = 'Id_PhotosModule';
	public $timestamps = false;

	protected $casts = [
		'Id_Module' => 'int',
		'Poids_PhotosModules' => 'float'
	];

	protected $dates = [
		'DateCreation_PhotosModules'
	];

	protected $fillable = [
		'Id_Module',
		'LienPhotosServeur_PhotosModule',
		'DateCreation_PhotosModules',
		'Poids_PhotosModules',
		'Legende_PhotosModules'
	];

	public function module()
	{
		return $this->belongsTo(\App\Models\Module::class, 'Id_Module');
	}
}
