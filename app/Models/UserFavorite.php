<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserFavorite extends Model
{
    protected $fillable = [
        'tour_id',
        'user_id',
    ];
}
