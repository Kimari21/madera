<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 11 Jan 2017 10:36:55 +0000.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Role
 * 
 * @property int $Id_Role
 * @property string $Description_Role
 * 
 * @property \Illuminate\Database\Eloquent\Collection $utilisateurs
 *
 * @package App\Models
 */
class Role extends Model
{
	protected $table = 'role';
	protected $primaryKey = 'Id_Role';
	public $timestamps = false;

	protected $fillable = [
		'Description_Role'
	];

	public function utilisateurs()
	{
		return $this->hasMany(\App\Models\Utilisateur::class, 'Id_Role');
	}
}
