<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use App\User;

/**
 * Class Invoice
 * 
 * @property int $id
 * @property Carbon|null $depreciated_at
 * @property int|null $cliente_id
 * @property float|null $total_price
 * @property int|null $total_materials
 * @property int|null $processed_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $client_name
 * @property string|null $order_code
 * @property int $status_id
 * @property int $payment_type
 * 
 * @property User|null $user
 * @property Payment $payment
 * @property Status $status
 * @property Collection|CashInflowOutflow[] $cash_inflow_outflows
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
		'status_id' => 'int',
		'payment_type' => 'int'
	];

	protected $dates = [
		'depreciated_at'
	];

	protected $fillable = [
		'depreciated_at',
		'cliente_id',
		'total_price',
		'total_materials',
		'processed_by',
		'client_name',
		'order_code',
		'status_id',
		'payment_type'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'cliente_id');
	}

	public function payment()
	{
		return $this->belongsTo(Payment::class, 'payment_type');
	}

	public function status()
	{
		return $this->belongsTo(Status::class);
	}

	public function cash_inflow_outflows()
	{
		return $this->hasMany(CashInflowOutflow::class);
	}
}
