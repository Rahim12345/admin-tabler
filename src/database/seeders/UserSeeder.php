<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Rahim Süleymanov',
                'email' => 'admin@rs-code.az',
                'password' => bcrypt('12345678'),
            ]
        ];

        foreach ($users as $user) {
            User::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => $user['password'],
            ]);
        }
    }
}
