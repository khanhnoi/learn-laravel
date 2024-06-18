<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Define the users you want to add
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('123456'),
                'role' => 1,
            ],
            [
                'name' => 'Khanh Noi',
                'email' => 'nqkhanh1998@gmail.com',
                'password' => Hash::make('123456'),
                'role' => 1,
            ]
        ];

        foreach ($users as $userData) {
            // Check if the email already exists
            if (!User::where('email', $userData['email'])->exists()) {
                User::create($userData);
            }
        }

    }
}
