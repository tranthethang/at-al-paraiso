<?php
namespace App\Models;
use MennoVanHout\LaravelModelConstants\Types\ModelAttributes;
class GuestAttributes extends ModelAttributes
{
	 const ID = 'id';
	 const FIRST_NAME = 'first_name';
	 const LAST_NAME = 'last_name';
	 const EMAIL = 'email';
	 const PHONE = 'phone';
	 const ADDRESS = 'address';
	 const DETAILS = 'details';
	 const CREATED_AT = 'created_at';
	 const UPDATED_AT = 'updated_at';
}