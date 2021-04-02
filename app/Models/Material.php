<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Material
 * 
 * @property int $id
 * @property string|null $name
 * @property float|null $quantity
 * @property float|null $buy_price
 * @property string|null $description
 * @property string|null $short_description
 * @property int|null $intern_material
 * @property int $medida_unity
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int $category_id
 * @property int $materials_id
 * @property string|null $created_by
 * @property string|null $updated_by
 * 
 * @property Category $category
 * @property Material $material
 * @property Medida $medida
 * @property Collection|Material[] $materials
 * @property Collection|Medida[] $medidas
 *
 * @package App\Models
 */
class Material extends Model
{
	protected $table = 'materials';

	protected $casts = [
		'quantity' => 'float',
		'buy_price' => 'float',
		'intern_material' => 'int',
		'medida_unity' => 'int',
		'category_id' => 'int',
		'materials_id' => 'int'
	];

	protected $fillable = [
		'name',
		'quantity',
		'buy_price',
		'description',
		'short_description',
		'intern_material',
		'medida_unity',
		'category_id',
		'materials_id',
		'created_by',
		'updated_by'
	];

	public function category()
	{
		return $this->belongsTo(Category::class);
	}

	public function material()
	{
		return $this->belongsTo(Material::class, 'materials_id');
	}

	public function medida()
	{
		return $this->belongsTo(Medida::class, 'medida_unity');
	}

	public function materials()
	{
		return $this->hasMany(Material::class, 'materials_id');
	}

	public function medidas()
	{
		return $this->belongsToMany(Medida::class, 'materials_medidas')
					->withPivot('id', 'price', 'description', 'quantity_by_base_unity', 'lucro')
					->withTimestamps();
	}
}
