<?php
namespace App\Models;
use MennoVanHout\LaravelModelConstants\Types\ModelAttributes;
class ReservationAttributes extends ModelAttributes
{
	 const ID = 'id';
	 const GUEST_ID = 'guest_id';
	 const START_DATE = 'start_date';
	 const END_DATE = 'end_date';
	 const DISCOUNT_PERCENT = 'discount_percent';
	 const TOTAL_PRICE = 'total_price';
	 const CREATED_AT = 'created_at';
	 const UPDATED_AT = 'updated_at';
}