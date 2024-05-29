<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Admin2',
            'surname1' => 'admin',
            'surname2' => 'admin',
            'username' => 'Admin',
            'email' => 'admin@admin2.net',
            'password' => Hash::make('admin123'), // Hashear la contraseña
            'phone' => '1234567890',
            'log_in' => true,
            'is_designer' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
