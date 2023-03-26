<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RoomReserved
 * 
 * @property int $id
 * @property int $reservation_id
 * @property int $room_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Reservation $reservation
 * @property Room $room
 *
 * @package App\Models
 */
class RoomReserved extends Model
{
	protected $table = 'room_reserved';

	protected $casts = [
		'reservation_id' => 'int',
		'room_id' => 'int'
	];

	protected $fillable = [
		'reservation_id',
		'room_id'
	];

	public function reservation()
	{
		return $this->belongsTo(Reservation::class);
	}

	public function room()
	{
		return $this->belongsTo(Room::class);
	}
}
