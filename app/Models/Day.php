<?php

namespace App\Models;

use App\Models\Tour;
use App\Models\Image;
use App\Models\Service;
use App\Models\Province;
use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    protected $fillable = [
        'description',
        'start_at',
        'end_at',
        'price',    
    ];

    public function tours(){
        return $this->hasMany(Tour::class);
    }
}
