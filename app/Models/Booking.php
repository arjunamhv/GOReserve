<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function ticket() {
        return $this->hasOne(Ticket::class);
    }

    public function payment() {
        return $this->hasOne(Payment::class);
    }

    public function field() {
        return $this->belongsTo(Field::class, 'field_id');
    }
}
