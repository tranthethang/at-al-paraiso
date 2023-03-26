<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Reservation
 * 
 * @property int $id
 * @property int $guest_id
 * @property Carbon $start_date
 * @property Carbon $end_date
 * @property float $discount_percent
 * @property float $total_price
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|InvoiceGuest[] $invoice_guests
 * @property Collection|ReservationStatusEvent[] $reservation_status_events
 * @property Collection|RoomReserved[] $room_reserveds
 * @property Collection|Synchronization[] $synchronizations
 *
 * @package App\Models
 */
class Reservation extends Model
{
	protected $table = 'reservation';

	protected $casts = [
		'guest_id' => 'int',
		'start_date' => 'date',
		'end_date' => 'date',
		'discount_percent' => 'float',
		'total_price' => 'float'
	];

	protected $fillable = [
		'guest_id',
		'start_date',
		'end_date',
		'discount_percent',
		'total_price'
	];

	public function invoice_guests()
	{
		return $this->hasMany(InvoiceGuest::class);
	}

	public function reservation_status_events()
	{
		return $this->hasMany(ReservationStatusEvent::class);
	}

	public function room_reserveds()
	{
		return $this->hasMany(RoomReserved::class);
	}

	public function synchronizations()
	{
		return $this->hasMany(Synchronization::class);
	}
}
