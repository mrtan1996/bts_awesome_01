<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserBooking extends Model
{
    protected $fillable = [
        'tour_id',
        'user_id',
        'phone',
        'description',
        'status',
        'total_price',
        'total_people',
    ];
}
