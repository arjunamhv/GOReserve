<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    use HasFactory;

    protected $table = 'fields';
    
    protected $fillable = [
        'field_banner',
        'field_photos',
        'gor_id',
        'name',
        'type',
        'price'
    ];

    public function booking() {
        return $this->hasOne(Booking::class);
    }

    public function gor() {
        return $this->belongsTo(Gor::class, 'gor_id');
    }

    public function type() {
        return $this->belongsTo(Type::class, 'type', 'id');
    }

    public function rating() {
        return $this->hasMany(Rating::class);
    }
}
