<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Status
 * 
 * @property int $id
 * @property string|null $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Invoice[] $invoices
 * @property Collection|Project[] $projects
 *
 * @package App\Models
 */
class Status extends Model
{
	protected $table = 'statuses';

	protected $fillable = [
		'name'
	];

	public function invoices()
	{
		return $this->hasMany(Invoice::class);
	}

	public function projects()
	{
		return $this->hasMany(Project::class);
	}
}
