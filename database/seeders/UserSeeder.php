<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = 'User'; 
        $user->email = 'user@example.com'; 
        $user->password = Hash::make('123456');
        $user->save();

        $admin = new User();
        $admin->name = 'Admin'; 
        $admin->email = 'admin@example.com'; 
        $admin->password = Hash::make('123456'); 
        $admin->is_admin = true; 
        $admin->save();
    }
}
