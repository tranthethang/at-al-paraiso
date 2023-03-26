<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Room
 * 
 * @property int $id
 * @property string $room_name
 * @property string|null $description
 * @property int $hotel_id
 * @property int $room_type_id
 * @property float $current_price
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Hotel $hotel
 * @property RoomType $room_type
 * @property Collection|ChannelUsed[] $channel_useds
 * @property Collection|RoomReserved[] $room_reserveds
 *
 * @package App\Models
 */
class Room extends Model
{
	protected $table = 'room';

	protected $casts = [
		'hotel_id' => 'int',
		'room_type_id' => 'int',
		'current_price' => 'float'
	];

	protected $fillable = [
		'room_name',
		'description',
		'hotel_id',
		'room_type_id',
		'current_price'
	];

	public function hotel()
	{
		return $this->belongsTo(Hotel::class);
	}

	public function room_type()
	{
		return $this->belongsTo(RoomType::class);
	}

	public function channel_useds()
	{
		return $this->hasMany(ChannelUsed::class);
	}

	public function room_reserveds()
	{
		return $this->hasMany(RoomReserved::class);
	}
}
