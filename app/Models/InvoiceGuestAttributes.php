<?php
namespace App\Models;
use MennoVanHout\LaravelModelConstants\Types\ModelAttributes;
class InvoiceGuestAttributes extends ModelAttributes
{
	 const ID = 'id';
	 const GUEST_ID = 'guest_id';
	 const RESERVATION_ID = 'reservation_id';
	 const INVOICE_AMOUNT = 'invoice_amount';
	 const ISSUED_AT = 'issued_at';
	 const PAID_AT = 'paid_at';
	 const CANCELED_AT = 'canceled_at';
	 const CREATED_AT = 'created_at';
	 const UPDATED_AT = 'updated_at';
}