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
                'def' => 2426,
                'cres' => 21
            ],
            [
                'name' => 'Astera Mail',
                'type' => 'chest',
                'def' => 2472,
                'cres' => 25
            ],
            [
                'name' => 'Astera Greaves',
                'type' => 'legs',
                'def' => 2345,
                'cres' => 30
            ],
            [
                'name' => 'Astera Gauntlets',
                'type' => 'hand',
                'def' => 2426,
                'cres' => 21
            ],
            [
                'name' => 'Astera Boots',
                'type' => 'feet',
                'def' => 2426,
                'cres' => 21
            ],
            [
                'name' => 'Milletian Helm',
                'type' => 'head',
                'bal' => 1,
                'def' => 2996,
                'cres' => 24
            ],
            [
                'name' => 'Milletian Mail',
                'type' => 'chest',
                'bal' => 1,
                'def' => 2932,
                'cres' => 29
            ],
            [
                'name' => 'Milletian Greaves',
                'type' => 'legs',
                'bal' => 1,
                'def' => 2775,
                'cres' => 34
            ],
            [
                'name' => 'Milletian Gauntlets',
                'type' => 'hand',
                'bal' => 1,
                'def' => 2996,
                'cres' => 24
            ],
            [
                'name' => 'Milletian Boots',
                'type' => 'feet',
                'bal' => 1,
                'def' => 2996,
                'cres' => 24
            ],
            [
                'name' => 'Ardri Helm',
                'type' => 'head',
                'bal' => 1,
                'def' => 3475,
                'cres' => 27
            ],
            [
                'name' => 'Ardri Mail',
                'type' => 'chest',
                'bal' => 1,
                'def' => 3528,
                'cres' => 34
            ],
            [
                'name' => 'Ardri Greaves',
                'type' => 'legs',
                'bal' => 1,
                'def' => 3342,
                'cres' => 40
            ],
            [
                'name' => 'Ardri Gauntlets',
                'type' => 'hand',
                'bal' => 1,
                'def' => 3475,
                'cres' => 27
            ],
            [
                'name' => 'Ardri Boots',
                'type' => 'feet',
                'bal' => 1,
                'def' => 3475,
                'cres' => 27
            ]
        ];
        foreach ($armors as $item) {
            DB::table('armors')->insert($item);
        };
    }
}
