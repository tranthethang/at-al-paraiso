<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ChannelUsed
 * 
 * @property int $room_id
 * @property int $channel_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Channel $channel
 * @property Room $room
 *
 * @package App\Models
 */
class ChannelUsed extends Model
{
	protected $table = 'channel_used';
	public $incrementing = false;

	protected $casts = [
		'room_id' => 'int',
		'channel_id' => 'int'
	];

	public function channel()
	{
		return $this->belongsTo(Channel::class);
	}

	public function room()
	{
		return $this->belongsTo(Room::class);
	}
}
