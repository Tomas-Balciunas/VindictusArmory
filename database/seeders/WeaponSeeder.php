<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WeaponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('weapons')->insert([
            [
                'name' => 'Dullahan',
                'quality' => true,
                'ats' => 9,
                'bal' => 68,
                'crit' => 67,
                'att' => 14800,
                'matt' => 14800,
                'str' => 110,
                'agi' => 60,
                'int' => 148,
                'wil' => 80
            ],
            [
                'name' => 'Astera',
                'quality' => true,
                'ats' => 9,
                'bal' => 58,
                'crit' => 82,
                'att' => 18800,
                'matt' => 18800,
                'str' => 110,
                'agi' => 60,
                'int' => 148,
                'wil' => 80
            ],
            [
                'name' => 'Milletian',
                'quality' => true,
                'ats' => 9,
                'bal' => 52,
                'crit' => 97,
                'att' => 22800,
                'matt' => 22800,
                'str' => 110,
                'agi' => 60,
                'int' => 148,
                'wil' => 80
            ],
            [
                'name' => 'Ardri',
                'quality' => true,
                'ats' => 9,
                'bal' => 52,
                'crit' => 112,
                'att' => 26800,
                'matt' => 26800,
                'str' => 110,
                'agi' => 60,
                'int' => 148,
                'wil' => 80
            ]
        ]);
    }
}
