<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Field;
use App\Models\Gor;

class FieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gor = Gor::first(); // Mengambil data GOR pertama, sesuaikan dengan cara Anda mendapatkan GOR

        // Menambahkan beberapa bidang olahraga ke dalam GOR
        $fieldsData = [
            [
                'field_banner' => 'field_banner_1.jpg',
                'field_photos' => json_encode(['field_photos_1.jpg', 'field_photos_2.jpg']),
                'name' => 'Lapangan Badminton 1',
                'type' => 1,
                'price' => 25000
            ],
            [
                'field_banner' => 'field_banner_2.jpg',
                'field_photos' => json_encode(['field_photos_4.jpg', 'field_photos_5.jpg']),
                'name' => 'Lapangan Basket Indoor 1',
                'type' => 2,
                'price' => 35000
            ],
            [
                'field_banner' => 'field_banner_3.jpg',
                'field_photos' => json_encode(['field_photos_6.jpg', 'field_photos_7.jpg']),
                'name' => 'Lapangan Futsal 1',
                'type' => 3,
                'price' => 35000
            ],
            [
                'field_banner' => 'field_banner_4.jpg',
                'field_photos' => json_encode(['field_photos_8.jpg', 'field_photos_9.jpg']),
                'name' => 'Meja Pingpong 1',
                'type' => 4,
                'price' => 25000
            ],
        ];

        foreach ($fieldsData as $field) {
            $newField = new Field();
            $newField->gor()->associate($gor);
            $newField->field_banner = $field['field_banner'];
            $newField->field_photos = $field['field_photos'];
            $newField->name = $field['name'];
            $newField->type = $field['type'];
            $newField->price = $field['price'];
            $newField->save();
        }
    }
}