<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CashInflowOutflow
 * 
 * @property int $id
 * @property int $payment_type
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $description
 * @property int $inflow_outflow_type_id
 * @property float|null $amount
 * @property int $invoice_id
 * 
 * @property InflowOutflowType $inflow_outflow_type
 * @property Invoice $invoice
 * @property Payment $payment
 *
 * @package App\Models
 */
class CashInflowOutflow extends Model
{
	protected $table = 'cash_inflow_outflow';

	protected $casts = [
		'payment_type' => 'int',
		'inflow_outflow_type_id' => 'int',
		'amount' => 'float',
		'invoice_id' => 'int'
	];

	protected $fillable = [
		'payment_type',
		'description',
		'inflow_outflow_type_id',
		'amount',
		'invoice_id'
	];

	public function inflow_outflow_type()
	{
		return $this->belongsTo(InflowOutflowType::class);
	}

	public function invoice()
	{
		return $this->belongsTo(Invoice::class);
	}

	public function payment()
	{
		return $this->belongsTo(Payment::class, 'payment_type');
	}
}
