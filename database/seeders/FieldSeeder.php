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
                'name' => 'Lapangan Badminton 1',
                'type' => 1,
                'price' => 25000
            ],
            [
                'name' => 'Lapangan Basket Indoor 1',
                'type' => 2,
                'price' => 35000
            ],
            [
                'name' => 'Lapangan Futsal 1',
                'type' => 3,
                'price' => 35000
            ],
            [
                'name' => 'Meja Pingpong 1',
                'type' => 4,
                'price' => 25000
            ],
        ];

        foreach ($fieldsData as $field) {
            $newField = new Field();
            $newField->gor()->associate($gor);
            $newField->name = $field['name'];
            $newField->type = $field['type'];
            $newField->price = $field['price'];
            $newField->save();
        }
    }
}
