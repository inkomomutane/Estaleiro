<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class InflowOutflowType
 * 
 * @property int $id
 * @property string|null $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|CashInflowOutflow[] $cash_inflow_outflows
 *
 * @package App\Models
 */
class InflowOutflowType extends Model
{
	protected $table = 'inflow_outflow_types';

	protected $fillable = [
		'name'
	];

	public function cash_inflow_outflows()
	{
		return $this->hasMany(CashInflowOutflow::class);
	}
}
