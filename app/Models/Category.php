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
 * @property string $category_name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Hotel[] $hotels
 *
 * @package App\Models
 */
class Category extends Model
{
	protected $table = 'category';

	protected $fillable = [
		'category_name'
	];

	public function hotels()
	{
		return $this->hasMany(Hotel::class);
	}
}
