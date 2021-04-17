<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Order
 * 
 * @property int $id
 * @property string|null $order_code
 * @property bool|null $discounted
 * @property int $material
 * @property int|null $quantity
 * @property bool|null $vat_included
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property MeasuresOfMaterial $measures_of_material
 *
 * @package App\Models
 */
class Order extends Model
{
	use SoftDeletes;
	protected $table = 'orders';

	protected $casts = [
		'discounted' => 'bool',
		'material' => 'int',
		'quantity' => 'int',
		'vat_included' => 'bool'
	];

	protected $fillable = [
		'order_code',
		'discounted',
		'material',
		'quantity',
		'vat_included'
	];

	public function measures_of_material()
	{
		return $this->belongsTo(MeasuresOfMaterial::class, 'material');
	}
}
