<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();


        \App\Models\User::create([
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'cin' => '12345678', // or any other value
            'password' => bcrypt('12345678'),
            'fillier_id' => \App\Models\Fillier::all()->random()->id,
            'role' => 'admin',
            'accepted' => 'attent',
        ]);
    
        \App\Models\User::create([
            'name' => 'admin2',
            'email' => 'admin2@mail.com',
            'cin' => '87654321', // or any other value
            'password' => bcrypt('12345678'),
            'fillier_id' => \App\Models\Fillier::all()->random()->id,
            'role' => 'admin',
            'accepted' => 'attent',
        ]);
    }
}
