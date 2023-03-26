<?php
namespace App\Models;
use MennoVanHout\LaravelModelConstants\Types\ModelAttributes;
class UserAttributes extends ModelAttributes
{
	 const ID = 'id';
	 const NAME = 'name';
	 const EMAIL = 'email';
	 const EMAIL_VERIFIED_AT = 'email_verified_at';
	 const PASSWORD = 'password';
	 const REMEMBER_TOKEN = 'remember_token';
	 const CREATED_AT = 'created_at';
	 const UPDATED_AT = 'updated_at';
}