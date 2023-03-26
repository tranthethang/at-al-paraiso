<?php
namespace App\Models;
use MennoVanHout\LaravelModelConstants\Types\ModelAttributes;
class HotelAttributes extends ModelAttributes
{
	 const ID = 'id';
	 const HOTEL_NAME = 'hotel_name';
	 const DESCRIPTION = 'description';
	 const CATEGORY_ID = 'category_id';
	 const IS_ACTIVE = 'is_active';
	 const CREATED_AT = 'created_at';
	 const UPDATED_AT = 'updated_at';
}