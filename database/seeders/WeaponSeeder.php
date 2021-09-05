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
                'name' => 'Astera',
                'ats' => 9,
                'bal' => 58,
                'crit' => 82
            ],
            [
                'name' => 'Milletian',
                'ats' => 9,
                'bal' => 51,
                'crit' => 97
            ],
            [
                'name' => 'Ardri',
                'ats' => 9,
                'bal' => 51,
                'crit' => 112
            ]
        ]);
    }
}
