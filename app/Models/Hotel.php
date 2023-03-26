<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Hotel
 * 
 * @property int $id
 * @property string $hotel_name
 * @property string|null $description
 * @property int $category_id
 * @property bool $is_active
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Category $category
 * @property Collection|Room[] $rooms
 *
 * @package App\Models
 */
class Hotel extends Model
{
	protected $table = 'hotel';

	protected $casts = [
		'category_id' => 'int',
		'is_active' => 'bool'
	];

	protected $fillable = [
		'hotel_name',
		'description',
		'category_id',
		'is_active'
	];

	public function category()
	{
		return $this->belongsTo(Category::class);
	}

	public function rooms()
	{
		return $this->hasMany(Room::class);
	}
}
