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
 * @property bool|null $intern_material
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property int $measure_id
 * @property int $category_id
 * 
 * @property Category $category
 * @property Measure $measure
 * @property Collection|Measure[] $measures
 *
 * @package App\Models
 */
class Material extends Model
{
	protected $table = 'materials';

	protected $casts = [
		'quantity' => 'float',
		'buy_price' => 'float',
		'intern_material' => 'bool',
		'measure_id' => 'int',
		'category_id' => 'int'
	];

	protected $fillable = [
		'name',
		'quantity',
		'buy_price',
		'description',
		'short_description',
		'intern_material',
		'created_by',
		'updated_by',
		'measure_id',
		'category_id'
	];

	public function category()
	{
		return $this->belongsTo(Category::class);
	}

	public function measure()
	{
		return $this->belongsTo(Measure::class);
	}

	public function measures()
	{
		return $this->belongsToMany(Measure::class, 'measures_of_materials', 'materials_id', 'measures_id')
					->withPivot('price', 'description', 'quantity_by_base_unity', 'profit', 'id', 'discount')
					->withTimestamps();
	}
}
