<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Project
 * 
 * @property int $id
 * @property string|null $name
 * @property int $client_id
 * @property float|null $deposited_amount
 * @property float|null $available_amount
 * @property float|null $missing_amount
 * @property float|null $progress_percent
 * @property int|null $total_materials
 * @property float|null $total_paid
 * @property int $status_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Status $status
 * @property User $user
 * @property Collection|MaterialsMedida[] $materials_medidas
 *
 * @package App\Models
 */
class Project extends Model
{
	protected $table = 'projects';

	protected $casts = [
		'client_id' => 'int',
		'deposited_amount' => 'float',
		'available_amount' => 'float',
		'missing_amount' => 'float',
		'progress_percent' => 'float',
		'total_materials' => 'int',
		'total_paid' => 'float',
		'status_id' => 'int'
	];

	protected $fillable = [
		'name',
		'client_id',
		'deposited_amount',
		'available_amount',
		'missing_amount',
		'progress_percent',
		'total_materials',
		'total_paid',
		'status_id'
	];

	public function status()
	{
		return $this->belongsTo(Status::class);
	}

	public function user()
	{
		return $this->belongsTo(\App\User::class, 'client_id');
	}

	public function materials_medidas()
	{
		return $this->belongsToMany(MaterialsMedida::class, 'materials_medidas_projects', 'project_id', 'material_medida_id')
					->withPivot('id')
					->withTimestamps();
	}
}
