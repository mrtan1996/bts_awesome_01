<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\TourCategory;
use App\Models\User;
use App\Models\Day;

class Tour extends Model
{
    protected $fillable = [
        'name',
        'duration',
        'description',
        'price',
        'status',
        'avg_rate',
    ];

    public function categories(){
        return $this->hasMany(Category::class);
    }

    public function userFavorites(){
        return $this->hasMany(User::class, 'user_favorites');
    }

    public function userRates(){
        return $this->hasMany(User::class, 'user_rates');
    }

    public function userBookings(){
        return $this->hasMany(User::class, 'user_bookings');
    }

    public function days(){
        return $this->hasMany(Day::class);
    }
}
