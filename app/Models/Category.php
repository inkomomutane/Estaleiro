<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 * 
 * @property int $id
 * @property string $name
 * @property int|null $level
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int $category_id
 * 
 * @property Category $category
 * @property Collection|Category[] $categories
 * @property Collection|Material[] $materials
 *
 * @package App\Models
 */
class Category extends Model
{
	protected $table = 'categories';

	protected $casts = [
		'level' => 'int',
		'category_id' => 'int'
	];

	protected $fillable = [
		'name',
		'level',
		'category_id'
	];

	public function category()
	{
		return $this->belongsTo(Category::class);
	}

	public function categories()
	{
		return $this->hasMany(Category::class);
	}

	public function materials()
	{
		return $this->hasMany(Material::class);
	}
}
