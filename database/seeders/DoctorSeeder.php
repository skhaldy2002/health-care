<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Constants\Enum;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DoctorSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        $user = \App\Models\User::factory()->create([
            'name' => 'doctor',
            'email' => 'doctor@gmail.com',
            'username' => 'doctor',
            'role' => Enum::DOCTOR,
            'password' => Hash::make('123456'),
        ]);

    }
}
