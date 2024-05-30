
<?php

use App\Models\Module;
use Database\Seeders\FilliersTableSeeder;
use Database\Seeders\UsersTableSeeder;
use Database\Seeders\ModulesTableSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(FilliersTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ModulesTableSeeder::class);

    }
}