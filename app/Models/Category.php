<?php

namespace App\Models;

use App\Models\Tour;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    public function tours(){
        return $this->hasMany(Tour::class);
    }

}
