<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function booking() {
        return $this->hasOne(Booking::class);
    }

    public function gor() {
        return $this->belongsTo(Gor::class, 'gor_id');
    }

    public function type() {
        return $this->hasOne(Type::class, 'type');
    }

    public function rating() {
        return $this->hasMany(Rating::class);
    }
}
