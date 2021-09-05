<?php

namespace Database\Seeders;

use App\Models\Weapon;
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
        $this->call([
            WeaponSeeder::class,
            ScrollSeeder::class,
            ArmorSeeder::class,
            AccessoriesSeeder::class
        ]);
    }
}
