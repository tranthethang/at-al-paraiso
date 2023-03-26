<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class InvoiceGuest
 * 
 * @property int $id
 * @property int $guest_id
 * @property int $reservation_id
 * @property float $invoice_amount
 * @property Carbon $issued_at
 * @property Carbon $paid_at
 * @property Carbon $canceled_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Guest $guest
 * @property Reservation $reservation
 *
 * @package App\Models
 */
class InvoiceGuest extends Model
{
	protected $table = 'invoice_guest';

	protected $casts = [
		'guest_id' => 'int',
		'reservation_id' => 'int',
		'invoice_amount' => 'float',
		'issued_at' => 'date',
		'paid_at' => 'date',
		'canceled_at' => 'date'
	];

	protected $fillable = [
		'guest_id',
		'reservation_id',
		'invoice_amount',
		'issued_at',
		'paid_at',
		'canceled_at'
	];

	public function guest()
	{
		return $this->belongsTo(Guest::class);
	}

	public function reservation()
	{
		return $this->belongsTo(Reservation::class);
	}
}
