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
      
        User::factory()->create([
            'name' => 'Admin3',
            'email' => 'admin3@example.com',
            'password' => Hash::make('123456'),
        ]);
    }
}
