<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => "Oak Soe Aung",
            "email" => "oaksoeaung@gmail.com",
            "phone" => "09777557034",
            "address" => "Yangon",
            "role" => 'admin',
            "password" => Hash::make("Butterflies123$")
        ]);
    }
}
