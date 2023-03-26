<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Guest
 * 
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $phone
 * @property string $address
 * @property string $details
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|InvoiceGuest[] $invoice_guests
 *
 * @package App\Models
 */
class Guest extends Model
{
	protected $table = 'guest';

	protected $fillable = [
		'first_name',
		'last_name',
		'email',
		'phone',
		'address',
		'details'
	];

	public function invoice_guests()
	{
		return $this->hasMany(InvoiceGuest::class);
	}
}
