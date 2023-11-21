<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Gor;
use App\Models\User;

class GORSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::where('name', 'admin')->first(); // Mengambil User dengan ID = 2

            $gor = new Gor();
            $gor->name = 'GOR Olahraga Hebat';
            $gor->address = json_encode([
                'provinsi' => 'DKI Jakarta',
                'kota' => 'Jakarta Selatan',
                'kecamatan' => 'Pancoran',
                'kelurahan' => 'Tebet Barat',
                'kode_pos' => '12810',
                'detail' => 'Jalan Tebet Raya No. 45A'
            ]);
            $gor->slug = 'gor-olahraga-hebat';
            $gor->opening_hour = '08:00';
            $gor->closing_hour = '20:00';

            // Mengaitkan GOR dengan User ID = 2
            $gor->user_id = $user->id;
            $gor->save();
    }
}
