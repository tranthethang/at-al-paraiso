<?php
namespace App\Models;
use MennoVanHout\LaravelModelConstants\Types\ModelAttributes;
class RoomAttributes extends ModelAttributes
{
	 const ID = 'id';
	 const ROOM_NAME = 'room_name';
	 const DESCRIPTION = 'description';
	 const HOTEL_ID = 'hotel_id';
	 const ROOM_TYPE_ID = 'room_type_id';
	 const CURRENT_PRICE = 'current_price';
	 const CREATED_AT = 'created_at';
	 const UPDATED_AT = 'updated_at';
}