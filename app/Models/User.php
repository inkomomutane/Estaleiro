<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;


/**
 * Class User
 * 
 * @property int $id
 * @property string $name
 * @property string $email
 * @property Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int|null $role_id
 * 
 * @property Role|null $role
 * @property Collection|Cashier[] $cashiers
 * @property Collection|Invoice[] $invoices
 * @property Collection|Project[] $projects
 *
 * @package App\Models
 */
class User extends Model
{
	protected $table = 'users';

	protected $casts = [
		'role_id' => 'int'
	];

	protected $dates = [
		'email_verified_at'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'name',
		'email',
		'email_verified_at',
		'password',
		'remember_token',
		'role_id'
	];

	public function role()
	{
		return $this->belongsTo(Role::class);
	}

	public function cashiers()
	{
		return $this->hasMany(Cashier::class, 'employee_id');
	}

	public function invoices()
	{
		return $this->hasMany(Invoice::class, 'cliente_id');
	}

	public function projects()
	{
		return $this->hasMany(Project::class, 'cliente_id');
	}
}
