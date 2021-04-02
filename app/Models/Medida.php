<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Medida
 * 
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Material[] $materials
 *
 * @package App\Models
 */
class Medida extends Model
{
	protected $table = 'medidas';

	protected $fillable = [
		'name'
	];

	public function materials()
	{
		return $this->belongsToMany(Material::class, 'materials_medidas')
					->withPivot('id', 'price', 'description', 'quantity_by_base_unity', 'lucro')
					->withTimestamps();
	}
}
