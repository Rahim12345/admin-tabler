<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Visitor;
use Faker\Factory as Faker;
use Carbon\Carbon;

class VisitorSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 1000; $i++) {
            Visitor::create([
                'ip_address' => $faker->ipv4,
                'user_agent' => $faker->userAgent,
                'visited_at' => Carbon::now()->subDays(rand(0, 30)),
            ]);
        }
    }
}
