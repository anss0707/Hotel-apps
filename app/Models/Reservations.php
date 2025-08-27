<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservations extends Model
{
    protected $fillable = [
        'reservation_number',
        'guest_name',
        'guest_email',
        'guest_phone',
        'guest_id_card',
        'guest_qty',
        'guest_check_in',
        'guest_check_out',
        'guest_note',
        'payment_method',
        'guest_room_number',
        'isOnline',
        'isReserve',
        'subtotal',
        'totalAmount',
        'totalNight',
        'tax'

    ];
}
