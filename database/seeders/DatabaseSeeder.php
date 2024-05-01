<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Create 5 filliers
        foreach (range(1, 5) as $index) {
            DB::table('filliers')->insert([
                'name' => $faker->word,

            ]);
        }

        // Create 5 modules
        foreach (range(1, 8) as $index) {
            DB::table('modules')->insert([
                'name' => $faker->word,
                'description' => $faker->sentence,
                'hours' => $faker->randomDigitNotNull,
                'fillier_id' => $faker->numberBetween(1, 5),
            ]);
        }
        
        // Create 10 users with role 'user'
        foreach (range(1, 10) as $index) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => bcrypt('password'), // password
                'role' => 'user',
                'accepted' => 'attent',
                'remember_token' => Str::random(10),
                'fillier_id' => $faker->numberBetween(1, 5),
            ]);
        }
        
        // Create 1 user with role 'admin'
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('password'), // password
            'role' => 'admin',
            'accepted' => 'attent',
            'remember_token' => Str::random(10),
            'fillier_id' => $faker->numberBetween(1, 5),
        ]);
    }
}
