@extends('main')
@section('content')
<h1>Vindi armory</h1>
<div class="body">
    <div>
        <ul>
            <li>Attack Speed:<span id="ats">0</span></li>
            <li>Balance:<span id="bal">0</span></li>
            <li>Critical Rate:<span id="crit">0</span></li>
            <li>Attack:<span id="att">0</span></li>
            <li>M. Attack:<span id="att">0</span></li>
            <li>Defense:<span id="def">0</span></li>
            <li>Crit Resistance:<span id="cres">0</span></li>
            <li>Strength:<span id="str">0</span></li>
            <li>Agility:<span id="agi">0</span></li>
            <li>Intelligence:<span id="int">0</span></li>
            <li>Willpower:<span id="wil">0</span></li>
        </ul>
    </div>
    <div class="gearContainer">
        <!----------------------------------------- WEAPON ------------------------------------------------------------------>
        @include('_gear.weapon.weapon')
        <!----------------------------------------- ARMOR ------------------------------------------------------------------->
        @include('_gear.armor.head')
        @include('_gear.armor.chest')
        @include('_gear.armor.legs')
        @include('_gear.armor.hands')
        @include('_gear.armor.feet')
        <!----------------------------------------- ACCESSORIES ------------------------------------------------------------->
        @include('_gear.accessories.earrings')
        @include('_gear.accessories.belt')
        @include('_gear.accessories.rings')
        @include('_gear.accessories.brooch')
        @include('_gear.accessories.totem')
        @include('_gear.accessories.necklace')
        @include('_gear.accessories.artifact')
    </div>
</div>
@endsection