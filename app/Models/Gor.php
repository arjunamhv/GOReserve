<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gor extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function scopefilter($query, array $filters)
    {
        //Mengecek apakah filter 'search' tersedia dalam array $filters
        $query->when($filters['search'] ?? false, function ($query, $search) {
        // Mengubah input pencarian menjadi huruf kecil
        $search = strtolower($search);

            // Mengaplikasikan pencarian ke dalam kondisi where
            return $query->where(function ($query) use ($search) {
                // Mencocokkan sebagian dari string di dalam JSON field 'address->kota' secara case-insensitive
                $query->whereRaw('LOWER(JSON_UNQUOTE(JSON_EXTRACT(address, "$.kota"))) LIKE ?', ['%' . $search . '%'])
                    // Mencocokkan sebagian dari string di dalam kolom 'name' secara case-insensitive
                    ->orWhereRaw('LOWER(name) LIKE ?', ['%' . $search . '%']);
            });
        });
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function field() {
        return $this->hasMany(Field::class);
    }
}
