<?php

namespace App\Http\Controllers;

use App\Models\Armor;
use App\Models\Scroll;
use App\Models\Weapon;
use App\Models\Accessories;
use Illuminate\Http\Request;

class ArmoryController extends Controller
{
    public function index () {
        $weapons = Weapon::all();
        $weaponPrefix = Scroll::where(['type' => 'prefix'])->where(['weapon' => 1])->get();
        $weaponSuffix = Scroll::where(['type' => 'suffix'])->where(['weapon' => 1])->get();
        
        $headArmor = Armor::where(['type' => 'head'])->get();
        $headPrefix = Scroll::where(['type' => 'prefix'])->where(['head' => 1])->get();
        $headSuffix = Scroll::where(['type' => 'suffix'])->where(['head' => 1])->get();

        $chestArmor = Armor::where(['type' => 'chest'])->get();
        $chestPrefix = Scroll::where(['type' => 'prefix'])->where(['chest' => 1])->get();
        $chestSuffix = Scroll::where(['type' => 'suffix'])->where(['chest' => 1])->get();

        $legArmor = Armor::where(['type' => 'legs'])->get();
        $legPrefix = Scroll::where(['type' => 'prefix'])->where(['legs' => 1])->get();
        $legSuffix = Scroll::where(['type' => 'suffix'])->where(['legs' => 1])->get();

        $handArmor = Armor::where(['type' => 'hand'])->get();
        $handPrefix = Scroll::where(['type' => 'prefix'])->where(['hands' => 1])->get();
        $handSuffix = Scroll::where(['type' => 'suffix'])->where(['hands' => 1])->get();

        $feetArmor = Armor::where(['type' => 'feet'])->get();
        $feetPrefix = Scroll::where(['type' => 'prefix'])->where(['feet' => 1])->get();
        $feetSuffix = Scroll::where(['type' => 'suffix'])->where(['feet' => 1])->get();

        $earrings = Accessories::where(['type' => 'earrings'])->get();
        $earringsPrefix = Scroll::where(['type' => 'prefix'])->where(['earrings' => 1])->get();
        $earringsSuffix = Scroll::where(['type' => 'suffix'])->where(['earrings' => 1])->get();
        
        $belt = Accessories::where(['type' => 'belt'])->get();
        $beltPrefix = Scroll::where(['type' => 'prefix'])->where(['belt' => 1])->get();
        $beltSuffix = Scroll::where(['type' => 'suffix'])->where(['belt' => 1])->get();

        $ring = Accessories::where(['type' => 'ring'])->get();
        $ringPrefix = Scroll::where(['type' => 'prefix'])->where(['rings' => 1])->get();
        $ringSuffix = Scroll::where(['type' => 'suffix'])->where(['rings' => 1])->get();

        $brooch = Accessories::where(['type' => 'brooch'])->get();
        $broochPrefix = Scroll::where(['type' => 'prefix'])->where(['brooch' => 1])->get();
        $broochSuffix = Scroll::where(['type' => 'suffix'])->where(['brooch' => 1])->get();

        $necklace = Accessories::where(['type' => 'necklace'])->get();
        $necklacePrefix = Scroll::where(['type' => 'prefix'])->where(['necklace' => 1])->get();
        $necklaceSuffix = Scroll::where(['type' => 'suffix'])->where(['necklace' => 1])->get();

        $totem = Accessories::where(['type' => 'totem'])->get();
        $totemPrefix = Scroll::where(['type' => 'prefix'])->where(['totem' => 1])->get();
        $totemSuffix = Scroll::where(['type' => 'suffix'])->where(['totem' => 1])->get();

        $artifact = Accessories::where(['type' => 'artifact'])->get();
        $artifactPrefix = Scroll::where(['type' => 'prefix'])->where(['artifact' => 1])->get();
        $artifactSuffix = Scroll::where(['type' => 'suffix'])->where(['artifact' => 1])->get();

        return view('pages.home', compact(
            'weapons', 
            'weaponPrefix', 
            'weaponSuffix', 
            'headArmor', 
            'headPrefix', 
            'headSuffix', 
            'chestArmor', 
            'chestPrefix', 
            'chestSuffix',
            'legArmor', 
            'legPrefix', 
            'legSuffix',
            'handArmor', 
            'handPrefix', 
            'handSuffix',
            'feetArmor', 
            'feetPrefix', 
            'feetSuffix',
            'earrings',
            'earringsPrefix',
            'earringsSuffix',
            'belt',
            'beltPrefix',
            'beltSuffix',
            'ring',
            'ringPrefix',
            'ringSuffix',
            'brooch',
            'broochPrefix',
            'broochSuffix',
            'necklace',
            'necklacePrefix',
            'necklaceSuffix',
            'totem',
            'totemPrefix',
            'totemSuffix',
            'artifact',
            'artifactPrefix',
            'artifactSuffix',
        ));
    }
}
