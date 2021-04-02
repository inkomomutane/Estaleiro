<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MaterialsMedidasProject
 * 
 * @property int $id
 * @property int|null $project_id
 * @property int|null $material_medida_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property MaterialsMedida|null $materials_medida
 * @property Project|null $project
 *
 * @package App\Models
 */
class MaterialsMedidasProject extends Model
{
	protected $table = 'materials_medidas_projects';

	protected $casts = [
		'project_id' => 'int',
		'material_medida_id' => 'int'
	];

	protected $fillable = [
		'project_id',
		'material_medida_id'
	];

	public function materials_medida()
	{
		return $this->belongsTo(MaterialsMedida::class, 'material_medida_id');
	}

	public function project()
	{
		return $this->belongsTo(Project::class);
	}
}
