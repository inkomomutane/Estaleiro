<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use App\User;
/**
 * Class Cashier
 * 
 * @property int $id
 * @property Carbon|null $opened_at
 * @property Carbon|null $closed_at
 * @property float|null $initial_balance
 * @property float|null $final_balance
 * @property bool|null $cashier_status
 * @property int $employee_id
 * @property bool|null $status
 * @property string|null $observation
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property User $user
 *
 * @package App\Models
 */
class Cashier extends Model
{
	protected $table = 'cashiers';

	protected $casts = [
		'initial_balance' => 'float',
		'final_balance' => 'float',
		'cashier_status' => 'bool',
		'employee_id' => 'int',
		'status' => 'bool'
	];

	protected $dates = [
		'opened_at',
		'closed_at'
	];

	protected $fillable = [
		'opened_at',
		'closed_at',
		'initial_balance',
		'final_balance',
		'cashier_status',
		'employee_id',
		'status',
		'observation'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'employee_id');
	}
}
