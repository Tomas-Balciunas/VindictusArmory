<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccessoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $accs = [
            [
                'name' => 'Innocent Cry',
                'type' => 'earrings',
                'crit' => 1,
                'str' => 120,
                'agi' => 45,
                'wil' => 53
            ],
            [
                'name' => "Devil's Crystal",
                'type' => 'earrings',
                'crit' => 2,
                'str' => 125,
                'agi' => 50,
                'wil' => 58
            ],
            [
                'name' => 'Innocent Tear',
                'type' => 'earrings',
                'crit' => 1,
                'agi' => 45,
                'int' => 162,
                'wil' => 53
            ],
            [
                'name' => "Devil's Teardrop",
                'type' => 'earrings',
                'crit' => 2,
                'agi' => 50,
                'int' => 167,
                'wil' => 58
            ],
            [
                'name' => 'Silent Resolution',
                'type' => 'earrings',
                'crit' => 3,
                'str' => 125,
                'agi' => 50,
                'int' => 167,
                'wil' => 58
            ],
            [
                'name' => 'Woeful Belt',
                'type' => 'belt',
                'bal' => 2,
                'str' => 140,
                'agi' => 90,
                'wil' => 100
            ],
            [
                'name' => 'Seal Belt',
                'type' => 'belt',
                'bal' => 3,
                'str' => 145,
                'agi' => 95,
                'wil' => 105
            ],
            [
                'name' => 'Grim Belt',
                'type' => 'belt',
                'bal' => 2,
                'agi' => 90,
                'int' => 188,
                'wil' => 100
            ],
            [
                'name' => 'Barrier Belt',
                'type' => 'belt',
                'bal' => 3,
                'agi' => 95,
                'int' => 193,
                'wil' => 105
            ],
            [
                'name' => 'Spirited Belt',
                'type' => 'belt',
                'bal' => 4,
                'str' => 145,
                'agi' => 95,
                'int' => 193,
                'wil' => 105
            ],
            [
                'name' => 'Frozen Thorn',
                'type' => 'ring',
                'bal' => 1,
                'str' => 140,
                'agi' => 70,
                'wil' => 80,
                'set' => 'a'
            ],
            [
                'name' => 'Frozen Dagger',
                'type' => 'ring',
                'bal' => 1,
                'str' => 140,
                'agi' => 70,
                'wil' => 80,
                'set' => 'a'
            ],
            [
                'name' => 'Daybreak Pioneer',
                'type' => 'ring',
                'bal' => 2,
                'crit' => 1,
                'str' => 140,
                'agi' => 70,
                'wil' => 80,
                'set' => 'b'
            ],
            [
                'name' => 'Daybreak Trailblazer',
                'type' => 'ring',
                'bal' => 2,
                'crit' => 1,
                'str' => 140,
                'agi' => 70,
                'wil' => 80,
                'set' => 'b'
            ],
            [
                'name' => 'Frozen Will',
                'type' => 'ring',
                'bal' => 1,
                'agi' => 70,
                'int' => 180,
                'wil' => 80,
                'set' => 'c'
            ],
            [
                'name' => 'Frozen Desire',
                'type' => 'ring',
                'bal' => 1,
                'agi' => 70,
                'int' => 180,
                'wil' => 80,
                'set' => 'c'
            ],
            [
                'name' => 'Daybreak Conquest',
                'type' => 'ring',
                'bal' => 2,
                'crit' => 1,
                'agi' => 70,
                'int' => 180,
                'wil' => 80,
                'set' => 'd'
            ],
            [
                'name' => 'Daybreak Transcendence',
                'type' => 'ring',
                'bal' => 2,
                'crit' => 1,
                'agi' => 70,
                'int' => 180,
                'wil' => 80,
                'set' => 'd'
            ],
            [
                'name' => 'Twilight Blade',
                'type' => 'ring',
                'bal' => 3,
                'crit' => 2,
                'str' => 140,
                'agi' => 70,
                'int' => 180,
                'wil' => 80,
                'set' => 'e'
            ],
            [
                'name' => 'Twilight Protection',
                'type' => 'ring',
                'bal' => 3,
                'crit' => 2,
                'str' => 140,
                'agi' => 70,
                'int' => 180,
                'wil' => 80,
                'set' => 'e'
            ],
            [
                'name' => 'White Kitty Brooch',
                'type' => 'brooch',
                'ats' => 2,
                'str' => 48,
                'agi' => 48,
                'int' => 48,
                'wil' => 48
            ],
            [
                'name' => 'Blue Kitty Brooch',
                'type' => 'brooch',
                'crit' => 1,
                'def' => 50,
                'str' => 33,
                'agi' => 33,
                'int' => 33,
                'wil' => 33
            ],
            [
                'name' => 'Red Moon Brooch',
                'type' => 'brooch',
                'ats' => 2,
                'crit' => 1,
                'def' => 50,
                'str' => 50,
                'agi' => 50,
                'int' => 50,
                'wil' => 50
            ],
            [
                'name' => 'Seraphic Feathers Brooch',
                'type' => 'brooch',
                'ats' => 2,
                'crit' => 2,
                'def' => 100,
                'str' => 50,
                'agi' => 50,
                'int' => 50,
                'wil' => 50
            ],
            [
                'name' => 'The Book of Legacy',
                'type' => 'totem',
                'crit' => 3,
                'def' => 40,
                'cres' => 1,
                'str' => 60,
                'int' => 80,
            ],
            [
                'name' => 'The Book of Succession',
                'type' => 'totem',
                'ats' => 3,
                'crit' => 3,
                'def' => 1040,
                'cres' => 5,
                'str' => 180,
                'agi' => 90,
                'int' => 243,
                'wil' => 80
            ],
            [
                'name' => 'The Book of Milletian',
                'type' => 'totem',
                'ats' => 3,
                'crit' => 3,
                'att' => 210,
                'matt' => 210,
                'def' => 1890,
                'cres' => 10,
                'str' => 180,
                'agi' => 90,
                'int' => 243,
                'wil' => 80
            ],
            [
                'name' => 'The Book of Ardri',
                'type' => 'totem',
                'ats' => 3,
                'crit' => 5,
                'att' => 610,
                'matt' => 610,
                'def' => 2290,
                'cres' => 12,
                'str' => 180,
                'agi' => 90,
                'int' => 243,
                'wil' => 80
            ],
            [
                'name' => 'Kitty Necklace',
                'type' => 'necklace',
                'str' => 3,
                'agi' => 16,
                'int' => 3,
                'wil' => 3
            ],
            [
                'name' => 'Blue Kitty Necklace',
                'type' => 'necklace',
                'str' => 5,
                'agi' => 5,
                'int' => 5,
                'wil' => 5
            ],
            [
                'name' => 'White Kitty Necklace',
                'type' => 'necklace',
                'def' => 50,
                'str' => 10,
                'agi' => 10,
                'int' => 10,
                'wil' => 10
            ],
            [
                'name' => 'Red Kitty Necklace',
                'type' => 'necklace',
                'def' => 50,
                'str' => 10,
                'agi' => 16,
                'int' => 13,
                'wil' => 10
            ],
            [
                'name' => 'Cat Statue',
                'type' => 'artifact',
            ],
            [
                'name' => 'Werewolf Paw',
                'type' => 'artifact',
            ],
            [
                'name' => 'Succubus Fang',
                'type' => 'artifact',
            ],
        ];

        foreach($accs as $acc) {
            DB::table('accessories')->insert($acc);
        };
    }
}
