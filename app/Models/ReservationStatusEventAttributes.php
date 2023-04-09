<?php
namespace App\Models;
use MennoVanHout\LaravelModelConstants\Types\ModelAttributes;
class ReservationStatusEventAttributes extends ModelAttributes
{
	 const CREATED_AT = 'created_at';
	 const DETAILS = 'details';
	 const ID = 'id';
	 const RESERVATION_ID = 'reservation_id';
	 const RESERVATION_STATUS_CATALOG_ID = 'reservation_status_catalog_id';
	 const UPDATED_AT = 'updated_at';
}