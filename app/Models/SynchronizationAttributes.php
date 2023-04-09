<?php
namespace App\Models;
use MennoVanHout\LaravelModelConstants\Types\ModelAttributes;
class SynchronizationAttributes extends ModelAttributes
{
	 const CHANNEL_ID = 'channel_id';
	 const CREATED_AT = 'created_at';
	 const ID = 'id';
	 const MESSAGE_RECEIVED = 'message_received';
	 const MESSAGE_SENT = 'message_sent';
	 const RESERVATION_ID = 'reservation_id';
	 const UPDATED_AT = 'updated_at';
}