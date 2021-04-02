<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Role
 * 
 * @property int $id
 * @property string|null $name
 * @property string|null $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Role extends Model
{
	protected $table = 'roles';

	protected $fillable = [
		'name',
		'description'
	];
	
	public function users()
	{
		return $this->hasMany(\App\User::class, 'role_id');
	} 
	
}
