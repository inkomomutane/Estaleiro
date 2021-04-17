<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use App\User;
/**
 * Class Project
 * 
 * @property int $id
 * @property string|null $name
 * @property float|null $deposited_amount
 * @property float|null $available_amount
 * @property float|null $missing_amount
 * @property float|null $progress_percent
 * @property int|null $total_materials
 * @property float|null $total_paid
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int $cliente_id
 * @property int $status_id
 * 
 * @property User $user
 * @property Status $status
 *
 * @package App\Models
 */
class Project extends Model
{
	protected $table = 'projects';

	protected $casts = [
		'deposited_amount' => 'float',
		'available_amount' => 'float',
		'missing_amount' => 'float',
		'progress_percent' => 'float',
		'total_materials' => 'int',
		'total_paid' => 'float',
		'cliente_id' => 'int',
		'status_id' => 'int'
	];

	protected $fillable = [
		'name',
		'deposited_amount',
		'available_amount',
		'missing_amount',
		'progress_percent',
		'total_materials',
		'total_paid',
		'cliente_id',
		'status_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'cliente_id');
	}

	public function status()
	{
		return $this->belongsTo(Status::class);
	}
}
