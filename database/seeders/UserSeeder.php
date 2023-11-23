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
        $user->email = 'user@laravel.com'; 
        $user->password = Hash::make('12345678'); 
        $user->save();

        $admin = new User();
        $admin->name = 'Admin'; 
        $admin->email = 'admin@laravel.com'; 
        $admin->password = Hash::make('12345678'); 
        $admin->is_admin = true; 
        $admin->save();
    }
}
