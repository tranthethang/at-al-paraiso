<?php
namespace App\Models;
use MennoVanHout\LaravelModelConstants\Types\ModelAttributes;
class SynchronizationAttributes extends ModelAttributes
{
	 const ID = 'id';
	 const RESERVATION_ID = 'reservation_id';
	 const CHANNEL_ID = 'channel_id';
	 const MESSAGE_SENT = 'message_sent';
	 const MESSAGE_RECEIVED = 'message_received';
	 const CREATED_AT = 'created_at';
	 const UPDATED_AT = 'updated_at';
}