<?php

namespace App;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Cashier;
use App\Models\Invoice;
use App\Models\Project;
use App\Models\Role;
use Laravel\Passport\HasApiTokens;
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
 * @package App
 */
class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
            'name',
            'email',
            'email_verified_at',
            'password',
            'remember_token',
            'role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime','role_id'=>'int'
    ];

   
   public function role()
	{
		return $this->belongsTo(\App\Models\Role::class);
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
