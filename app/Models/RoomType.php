<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RoomType
 * 
 * @property int $id
 * @property string $type_name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Room[] $rooms
 *
 * @package App\Models
 */
class RoomType extends Model
{
	protected $table = 'room_type';

	protected $fillable = [
		'type_name'
	];

	public function rooms()
	{
		return $this->hasMany(Room::class);
	}
}
