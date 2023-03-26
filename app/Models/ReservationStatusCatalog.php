<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ReservationStatusCatalog
 * 
 * @property int $id
 * @property string $status_name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|ReservationStatusEvent[] $reservation_status_events
 *
 * @package App\Models
 */
class ReservationStatusCatalog extends Model
{
	protected $table = 'reservation_status_catalog';

	protected $fillable = [
		'status_name'
	];

	public function reservation_status_events()
	{
		return $this->hasMany(ReservationStatusEvent::class);
	}
}
