<?php
namespace App\Models;
use MennoVanHout\LaravelModelConstants\Types\ModelAttributes;
class ReservationStatusEventAttributes extends ModelAttributes
{
	 const ID = 'id';
	 const RESERVATION_ID = 'reservation_id';
	 const RESERVATION_STATUS_CATALOG_ID = 'reservation_status_catalog_id';
	 const DETAILS = 'details';
	 const CREATED_AT = 'created_at';
	 const UPDATED_AT = 'updated_at';
}