<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;


/**
 * Class Measure
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
class Measure extends Model
{
	protected $table = 'measures';

	protected $fillable = [
		'name'
	];

	public function materials()
	{
		return $this->belongsToMany(Material::class, 'measures_of_materials', 'measures_id', 'materials_id')
					->withPivot('price', 'description', 'quantity_by_base_unity', 'profit', 'id', 'discount')
					->withTimestamps();
	}
}
