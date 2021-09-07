<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArmorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $armors = [
            [
                'name' => 'Astera Helm',
                'type' => 'head',
                'quality' => true,
                'def' => 2638,
                'cres' => 21,
                'str' => 180,
                'agi' => 90,
                'int' => 243,
                'wil' => 80
            ],
            [
                'name' => 'Astera Mail',
                'type' => 'chest',
                'quality' => true,
                'def' => 2684,
                'cres' => 25,
                'str' => 180,
                'agi' => 90,
                'int' => 243,
                'wil' => 80
            ],
            [
                'name' => 'Astera Greaves',
                'type' => 'legs',
                'quality' => true,
                'def' => 2557,
                'cres' => 30,
                'str' => 180,
                'agi' => 90,
                'int' => 243,
                'wil' => 80
            ],
            [
                'name' => 'Astera Gauntlets',
                'type' => 'hand',
                'quality' => true,
                'def' => 2638,
                'cres' => 21,
                'str' => 180,
                'agi' => 90,
                'int' => 243,
                'wil' => 80
            ],
            [
                'name' => 'Astera Boots',
                'type' => 'feet',
                'quality' => true,
                'def' => 2638,
                'cres' => 21,
                'str' => 180,
                'agi' => 90,
                'int' => 243,
                'wil' => 80
            ],
            [
                'name' => 'Milletian Helm',
                'type' => 'head',
                'quality' => true,
                'bal' => 1,
                'def' => 3208,
                'cres' => 24,
                'str' => 180,
                'agi' => 90,
                'int' => 243,
                'wil' => 80
            ],
            [
                'name' => 'Milletian Mail',
                'type' => 'chest',
                'quality' => true,
                'bal' => 1,
                'def' => 3144,
                'cres' => 29,
                'str' => 180,
                'agi' => 90,
                'int' => 243,
                'wil' => 80
            ],
            [
                'name' => 'Milletian Greaves',
                'type' => 'legs',
                'quality' => true,
                'bal' => 1,
                'def' => 2987,
                'cres' => 34,
                'str' => 180,
                'agi' => 90,
                'int' => 243,
                'wil' => 80
            ],
            [
                'name' => 'Milletian Gauntlets',
                'type' => 'hand',
                'quality' => true,
                'bal' => 1,
                'def' => 3208,
                'cres' => 24,
                'str' => 180,
                'agi' => 90,
                'int' => 243,
                'wil' => 80
            ],
            [
                'name' => 'Milletian Boots',
                'type' => 'feet',
                'quality' => true,
                'bal' => 1,
                'def' => 3208,
                'cres' => 24,
                'str' => 180,
                'agi' => 90,
                'int' => 243,
                'wil' => 80
            ],
            [
                'name' => 'Ardri Helm',
                'type' => 'head',
                'quality' => true,
                'bal' => 1,
                'def' => 3687,
                'cres' => 27,
                'str' => 180,
                'agi' => 90,
                'int' => 243,
                'wil' => 80
            ],
            [
                'name' => 'Ardri Mail',
                'type' => 'chest',
                'quality' => true,
                'bal' => 1,
                'def' => 3740,
                'cres' => 34,
                'str' => 180,
                'agi' => 90,
                'int' => 243,
                'wil' => 80
            ],
            [
                'name' => 'Ardri Greaves',
                'type' => 'legs',
                'quality' => true,
                'bal' => 1,
                'def' => 3554,
                'cres' => 40,
                'str' => 180,
                'agi' => 90,
                'int' => 243,
                'wil' => 80
            ],
            [
                'name' => 'Ardri Gauntlets',
                'type' => 'hand',
                'quality' => true,
                'bal' => 1,
                'def' => 3687,
                'cres' => 27,
                'str' => 180,
                'agi' => 90,
                'int' => 243,
                'wil' => 80
            ],
            [
                'name' => 'Ardri Boots',
                'type' => 'feet',
                'quality' => true,
                'bal' => 1,
                'def' => 3687,
                'cres' => 27,
                'str' => 180,
                'agi' => 90,
                'int' => 243,
                'wil' => 80
            ]
        ];
        foreach ($armors as $item) {
            DB::table('armors')->insert($item);
        };
    }
}
