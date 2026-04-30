<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            $users = [
                ['name' => 'Mohamed Ahshan', 'email' => 'mohamedahshan0056@gmail.com', 'password' => bcrypt('12345678')]
            ];

            foreach ($users as $user) {
                User::updateOrCreate(['email' => $user['email']], $user);
            }
    }
}

         
