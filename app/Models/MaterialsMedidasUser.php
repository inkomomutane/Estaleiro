<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MaterialsMedidasUser
 * 
 * @property int $id
 * @property int|null $material_medida_id
 * @property int|null $user_id
 * @property float|null $quantity
 * @property float|null $descont
 * @property float|null $final_price
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int $invoice_id
 * 
 * @property MaterialsMedida|null $materials_medida
 * @property User|null $user
 * @property Invoice $invoice
 *
 * @package App\Models
 */
class MaterialsMedidasUser extends Model
{
	protected $table = 'materials_medidas_users';

	protected $casts = [
		'material_medida_id' => 'int',
		'user_id' => 'int',
		'quantity' => 'float',
		'descont' => 'float',
		'final_price' => 'float',
		'invoice_id' => 'int'
	];

	protected $fillable = [
		'material_medida_id',
		'user_id',
		'quantity',
		'descont',
		'final_price',
		'invoice_id'
	];

	public function materials_medida()
	{
		return $this->belongsTo(MaterialsMedida::class, 'material_medida_id');
	}

	public function user()
	{
		return $this->belongsTo(\App\User::class);
	}

	public function invoice()
	{
		return $this->belongsTo(Invoice::class);
	}
}
