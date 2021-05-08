<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MeasuresOfMaterial
 * 
 * @property int $id
 * @property int $measures_id
 * @property int $materials_id
 * @property float|null $price
 * @property string|null $description
 * @property float|null $quantity_by_base_unity
 * @property float|null $profit
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property float|null $discount
 * 
 * @property Material $material
 * @property Measure $measure
 * @property Collection|Order[] $orders
 *
 * @package App\Models
 */
class MeasuresOfMaterial extends Model
{
	protected $table = 'measures_of_materials';

	protected $casts = [
		'measures_id' => 'int',
		'materials_id' => 'int',
		'price' => 'float',
		'quantity_by_base_unity' => 'float',
		'profit' => 'float',
		'discount' => 'float'
	];

	protected $fillable = [
		'measures_id',
		'materials_id',
		'price',
		'description',
		'quantity_by_base_unity',
		'profit',
		'discount'
	];

	public function material()
	{
		return $this->belongsTo(Material::class, 'materials_id');
	}

	public function measure()
	{
		return $this->belongsTo(Measure::class, 'measures_id');
	}

	public function orders()
	{
		return $this->hasMany(Order::class, 'material');
	}
}
