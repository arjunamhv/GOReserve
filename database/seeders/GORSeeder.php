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
            $gor->gor_banner = 'gor_banner_1.jpg';
            $gor->gor_photos = json_encode(['gor_photos_1.jpg', 'gor_photos_2.jpg']);
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
            $gor->contact = '081234567890';
            $gor->opening_hour = '08:00';
            $gor->closing_hour = '20:00';
            $gor->facility = json_encode(['Parkir Luas', 'Kamar Mandi','Mushola','kantin']);

            // Mengaitkan GOR dengan User ID = 2
            $gor->user_id = $user->id;
            $gor->save();
    }
}