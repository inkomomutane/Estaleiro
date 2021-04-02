<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Invoice
 * 
 * @property int $id
 * @property Carbon|null $deprecat_at
 * @property int|null $cliente_id
 * @property float|null $total_price
 * @property int|null $total_materials
 * @property int|null $processed_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int $status_id
 * 
 * @property Status $status
 * @property User|null $user
 * @property Collection|MaterialsMedidasUser[] $materials_medidas_users
 *
 * @package App\Models
 */
class Invoice extends Model
{
	protected $table = 'invoices';

	protected $casts = [
		'cliente_id' => 'int',
		'total_price' => 'float',
		'total_materials' => 'int',
		'processed_by' => 'int',
		'status_id' => 'int'
	];

	protected $dates = [
		'deprecat_at'
	];

	protected $fillable = [
		'deprecat_at',
		'cliente_id',
		'total_price',
		'total_materials',
		'processed_by',
		'status_id'
	];

	public function status()
	{
		return $this->belongsTo(Status::class);
	}

	public function user()
	{
		return $this->belongsTo(\App\User::class, 'processed_by');
	}

	public function materials_medidas_users()
	{
		return $this->hasMany(MaterialsMedidasUser::class);
	}
}
