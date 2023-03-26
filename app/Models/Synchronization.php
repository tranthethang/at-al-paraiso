<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Synchronization
 * 
 * @property int $id
 * @property int $reservation_id
 * @property int $channel_id
 * @property string $message_sent
 * @property string $message_received
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Channel $channel
 * @property Reservation $reservation
 *
 * @package App\Models
 */
class Synchronization extends Model
{
	protected $table = 'synchronization';

	protected $casts = [
		'reservation_id' => 'int',
		'channel_id' => 'int'
	];

	protected $fillable = [
		'reservation_id',
		'channel_id',
		'message_sent',
		'message_received'
	];

	public function channel()
	{
		return $this->belongsTo(Channel::class);
	}

	public function reservation()
	{
		return $this->belongsTo(Reservation::class);
	}
}
