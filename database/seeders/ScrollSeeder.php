<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScrollSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $scroll = [
            [
                'name' => 'Righteous',
                'type' => 'prefix',
                'weapon' => 1,
                'ats' => 8,
                'bal' => 2,
                'crit' => 2,
                'att' => 430,
                'matt' => 430
            ],
            [
                'name' => 'Immoral',
                'type' => 'prefix',
                'weapon' => 1,
                'ats' => 4,
                'crit' => 8,
                'cres' => -5,
                'att' => 220,
                'matt' => 220
            ],
            [
                'name' => 'Chaotic',
                'type' => 'prefix',
                'weapon' => 1,
                'ats' => 4,
                'crit' => 9,
                'cres' => -4,
                'att' => 340,
                'matt' => 340
            ],
            [
                'name' => 'Brutal',
                'type' => 'prefix',
                'weapon' => 1,
                'ats' => 8,
                'bal' => 2,
                'crit' => 4,
                'att' => 430,
                'matt' => 430
            ],
            [
                'name' => 'Calm',
                'type' => 'prefix',
                'weapon' => 1,
                'ats' => 4,
                'bal' => 5,
                'att' => -280,
                'matt' => -280
            ],
            [
                'name' => 'Conviction',
                'type' => 'suffix',
                'weapon' => 1,
                'ats' => 3,
                'bal' => -1,
                'crit' => 5,
                'att' => 970,
                'matt' => 970
            ],
            [
                'name' => 'Valor',
                'type' => 'suffix',
                'weapon' => 1,
                'ats' => 4,
                'bal' => 5,
                'att' => 130,
                'matt' => 130
            ],
            [
                'name' => 'Bloodlust',
                'type' => 'suffix',
                'weapon' => 1,
                'ats' => 5,
                'bal' => 3,
                'att' => 150,
                'matt' => 150
            ],
            [
                'name' => 'Reinforced',
                'type' => 'prefix',
                'hands' => 1,
                'feet' => 1,
                'ats' => 2,
                'bal' => 2,
                'crit' => 1,
                'att' => 145,
                'matt' => 145,
                'def' => 150,
                'cres' => -1
            ],
            [
                'name' => 'Weeping',
                'type' => 'prefix',
                'hands' => 1,
                'feet' => 1,
                'ats' => 2,
                'bal' => 3,
                'crit' => 2,
                'att' => 145,
                'matt' => 145,
                'def' => 300,
                'cres' => -1
            ],
            [
                'name' => 'Sorrowful',
                'type' => 'prefix',
                'hands' => 1,
                'feet' => 1,
                'ats' => 2,
                'bal' => 4,
                'crit' => 3,
                'att' => 145,
                'matt' => 145,
                'def' => 300,
                'cres' => -1
            ],
            [
                'name' => 'Echoing',
                'type' => 'suffix',
                'hands' => 1,
                'feet' => 1,
                'ats' => 1,
                'bal' => 4,
                'att' => 365,
                'matt' => 365,
                'def' => -260,
                'cres' => 2
            ],
            [
                'name' => 'Soul',
                'type' => 'suffix',
                'hands' => 1,
                'feet' => 1,
                'ats' => 1,
                'bal' => 5,
                'att' => 465,
                'matt' => 465,
                'def' => -300,
                'cres' => 3
            ],
            [
                'name' => 'Memorable',
                'type' => 'prefix',
                'head' => 1,
                'legs' => 1,
                'ats' => 2,
                'bal' => 1,
                'crit' => 2,
                'att' => 245,
                'matt' => 245,
                'def' => 100,
                'cres' => 2
            ],
            [
                'name' => 'Heartless',
                'type' => 'prefix',
                'head' => 1,
                'legs' => 1,
                'ats' => 2,
                'bal' => 2,
                'crit' => 2,
                'att' => 245,
                'matt' => 245,
                'def' => 200,
                'cres' => 4
            ],
            [
                'name' => 'Cool',
                'type' => 'prefix',
                'head' => 1,
                'legs' => 1,
                'ats' => 2,
                'bal' => 3,
                'crit' => 3,
                'att' => 245,
                'matt' => 245,
                'def' => 200,
                'cres' => 6
            ],
            [
                'name' => 'Capture',
                'type' => 'suffix',
                'head' => 1,
                'legs' => 1,
                'crit' => 3,
                'att' => 285,
                'matt' => 285,
                'def' => 280,
                'cres' => 5
            ],
            [
                'name' => 'Enthusiastic',
                'type' => 'suffix',
                'head' => 1,
                'chest' => 1,
                'legs' => 1,
                'hands' => 1,
                'feet' => 1,
                'bal' => 5,
                'att' => 282,
                'matt' => 282,
                'def' => -370
            ],
            [
                'name' => 'Well-Balanced',
                'type' => 'prefix',
                'head' => 1,
                'chest' => 1,
                'legs' => 1,
                'hands' => 1,
                'feet' => 1,
                'ats' => 2,
                'bal' => 1,
                'crit' => 1,
                'cres' => -1
            ],
            [
                'name' => 'Dash',
                'type' => 'suffix',
                'head' => 1,
                'chest' => 1,
                'legs' => 1,
                'hands' => 1,
                'feet' => 1
            ],
            [
                'name' => 'Temporal',
                'type' => 'prefix',
                'chest' => 1,
                'bal' => -3,
                'crit' => 4,
                'def' => 160,
                'cres' => 6
            ],
            [
                'name' => 'Infinite',
                'type' => 'prefix',
                'chest' => 1,
                'bal' => -3,
                'crit' => 5,
                'def' => 160,
                'cres' => 8
            ],
            [
                'name' => 'Dignified',
                'type' => 'prefix',
                'chest' => 1,
                'bal' => -3,
                'crit' => 6,
                'def' => 160,
                'cres' => 10
            ],
            [
                'name' => 'Master',
                'type' => 'suffix',
                'chest' => 1,
                'bal' => -1,
                'crit' => 5,
                'cres' => 5
            ],
            [
                'name' => 'Stigma',
                'type' => 'suffix',
                'chest' => 1,
                'bal' => -1,
                'crit' => 6,
                'def' => 70,
                'cres' => 7
            ],
            [
                'name' => 'Barrier',
                'type' => 'suffix',
                'chest' => 1,
                'bal' => -1,
                'crit' => 7,
                'def' => 120,
                'cres' => 8
            ],
            [
                'name' => 'Significant',
                'type' => 'prefix',
                'earrings' => 1,
                'belt' => 1,
                'rings' => 1,
                'brooch' => 1,
                'necklace' => 1,
                'artifact' => 1,
                'ats' => 1,
                'att' => 15,
                'matt' => 15
            ],
            [
                'name' => 'Fast',
                'type' => 'prefix',
                'earrings' => 1,
                'belt' => 1,
                'rings' => 1,
                'brooch' => 1,
                'necklace' => 1,
                'artifact' => 1,
                'ats' => 5,
                'bal' => -8
            ],
            [
                'name' => 'Meaningful',
                'type' => 'prefix',
                'earrings' => 1,
                'belt' => 1,
                'rings' => 1,
                'brooch' => 1,
                'necklace' => 1,
                'artifact' => 1,
                'ats' => 1,
                'att' => 200,
                'matt' => 200,
                'cres' => 3
            ],
            [
                'name' => 'Petite',
                'type' => 'prefix',
                'belt' => 1,
                'ats' => 1,
                'crit' => 1,
                'cres' => -3
            ],
            [
                'name' => 'Subdued',
                'type' => 'prefix',
                'belt' => 1,
                'ats' => 1,
                'crit' => 2,
                'cres' => -3
            ],
            [
                'name' => 'Vehement',
                'type' => 'prefix',
                'belt' => 1,
                'ats' => 1,
                'bal' => 1,
                'crit' => 3,
                'cres' => -3
            ],
            [
                'name' => 'Sparkling',
                'type' => 'prefix',
                'rings' => 1,
                'bal' => 2,
                'cres' => 3
            ],
            [
                'name' => 'The Dead',
                'type' => 'prefix',
                'rings' => 1,
                'bal' => 5,
                'cres' => 5
            ],
            [
                'name' => 'Sealed',
                'type' => 'prefix',
                'totem' => 1,
                'ats' => 1,
                'def' => 500
            ],
            [
                'name' => 'Raging',
                'type' => 'prefix',
                'totem' => 1,
                'ats' => 1,
                'crit' => 1,
                'def' => 800,
                'cres' => 3
            ],
            [
                'name' => 'Berserker',
                'type' => 'suffix',
                'earrings' => 1,
                'belt' => 1,
                'rings' => 1,
                'brooch' => 1,
                'necklace' => 1,
                'artifact' => 1,
                'att' => 30
            ],
            [
                'name' => 'Healthy',
                'type' => 'suffix',
                'earrings' => 1,
                'belt' => 1,
                'rings' => 1,
                'brooch' => 1,
                'necklace' => 1,
                'artifact' => 1,
                'def' => 130
            ],
            [
                'name' => 'Passion',
                'type' => 'suffix',
                'earrings' => 1,
                'belt' => 1,
                'rings' => 1,
                'brooch' => 1,
                'necklace' => 1,
                'artifact' => 1,
                'def' => 200
            ],
            [
                'name' => 'Wish',
                'type' => 'suffix',
                'earrings' => 1,
                'belt' => 1,
                'rings' => 1,
                'brooch' => 1,
                'necklace' => 1,
                'artifact' => 1,
                'def' => 300,
                'cres' => 1 
            ],
            [
                'name' => 'Irate',
                'type' => 'suffix',
                'earrings' => 1,
                'belt' => 1,
                'rings' => 1,
                'brooch' => 1,
                'necklace' => 1,
                'artifact' => 1,
                'def' => 400,
                'cres' => 2
            ],
            [
                'name' => 'Truth',
                'type' => 'suffix',
                'totem' => 1,
                'att' => 230,
                'matt' => 230,
                'cres' => 5
            ]
        ];
        
        foreach($scroll as $item) {
            DB::table('scrolls')->insert($item);
        };
    }
}
