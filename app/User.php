<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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

    	public function invoices()
	{
		return $this->hasMany(\App\Models\Invoice::class, 'processed_by');
	}

	public function materials_medidas()
	{
		return $this->belongsToMany(\App\Models\MaterialsMedida::class, 'materials_medidas_users', 'user_id', 'material_medida_id')
					->withPivot('id', 'quantity', 'descont', 'final_price', 'invoice_id')
					->withTimestamps();
	}
    public function role()
	{
		return $this->belongsTo(\App\Models\Role::class, 'role_id');
	}
}
