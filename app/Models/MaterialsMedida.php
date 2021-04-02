<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MaterialsMedida
 * 
 * @property int $id
 * @property int|null $medida_id
 * @property int|null $material_id
 * @property float|null $price
 * @property string|null $description
 * @property float|null $quantity_by_base_unity
 * @property float|null $lucro
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Material|null $material
 * @property Medida|null $medida
 * @property Collection|Project[] $projects
 * @property Collection|User[] $users
 *
 * @package App\Models
 */
class MaterialsMedida extends Model
{
	protected $table = 'materials_medidas';

	protected $casts = [
		'medida_id' => 'int',
		'material_id' => 'int',
		'price' => 'float',
		'quantity_by_base_unity' => 'float',
		'lucro' => 'float'
	];

	protected $fillable = [
		'medida_id',
		'material_id',
		'price',
		'description',
		'quantity_by_base_unity',
		'lucro'
	];

	public function material()
	{
		return $this->belongsTo(Material::class);
	}

	public function medida()
	{
		return $this->belongsTo(Medida::class);
	}

	public function projects()
	{
		return $this->belongsToMany(Project::class, 'materials_medidas_projects', 'material_medida_id')
					->withPivot('id')
					->withTimestamps();
	}

	public function users()
	{
		return $this->belongsToMany(\App\User::class, 'materials_medidas_users', 'material_medida_id')
					->withPivot('id', 'quantity', 'descont', 'final_price', 'invoice_id')
					->withTimestamps();
	}
}
