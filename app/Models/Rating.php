<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable = ['booking_id', 'comments', 'star_rating', 'status', 'updated_at', 'created_at'];

    public function booking() {
        return $this->belongsTo(Booking::class, 'booking_id');
    }
}

