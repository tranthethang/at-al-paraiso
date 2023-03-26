<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ReservationStatusEvent
 * 
 * @property int $id
 * @property int $reservation_id
 * @property int $reservation_status_catalog_id
 * @property string|null $details
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Reservation $reservation
 * @property ReservationStatusCatalog $reservation_status_catalog
 *
 * @package App\Models
 */
class ReservationStatusEvent extends Model
{
	protected $table = 'reservation_status_events';

	protected $casts = [
		'reservation_id' => 'int',
		'reservation_status_catalog_id' => 'int'
	];

	protected $fillable = [
		'reservation_id',
		'reservation_status_catalog_id',
		'details'
	];

	public function reservation()
	{
		return $this->belongsTo(Reservation::class);
	}

	public function reservation_status_catalog()
	{
		return $this->belongsTo(ReservationStatusCatalog::class);
	}
}
