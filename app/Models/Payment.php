<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Payment
 * 
 * @property int $id
 * @property string|null $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|CashInflowOutflow[] $cash_inflow_outflows
 * @property Collection|Invoice[] $invoices
 *
 * @package App\Models
 */
class Payment extends Model
{
	protected $table = 'payments';

	protected $fillable = [
		'name'
	];

	public function cash_inflow_outflows()
	{
		return $this->hasMany(CashInflowOutflow::class, 'payment_type');
	}

	public function invoices()
	{
		return $this->hasMany(Invoice::class, 'payment_type');
	}
}
