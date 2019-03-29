<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserRate extends Model
{
    protected $fillable = [
        'tour_id',
        'user_id',
        'comment',
        'rate_point',
    ];
}
