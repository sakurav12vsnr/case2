<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'place',
        'food',
        'detail',
        'img_src'
    ];

    public function bookings()
    {
        return $this->hasMany('App\Models\Booking');
    }

    public function likes()
    {
        return $this->hasMany('App\Models\Like');
    }
}
