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
 * @property int|null $categories_id
 * @property int|null $level
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Category|null $category
 * @property Collection|Category[] $categories
 * @property Collection|Material[] $materials
 *
 * @package App\Models
 */
class Category extends Model
{
	protected $table = 'categories';

	protected $casts = [
		'categories_id' => 'int',
		'level' => 'int'
	];

	protected $fillable = [
		'name',
		'categories_id',
		'level'
	];

	public function category()
	{
		return $this->belongsTo(Category::class, 'categories_id');
	}

	public function categories()
	{
		return $this->hasMany(Category::class, 'categories_id');
	}

	public function materials()
	{
		return $this->hasMany(Material::class);
	}
}
