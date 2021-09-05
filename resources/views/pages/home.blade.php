@extends('main')
@section('content')
<h1>Vindi armory</h1>
<div class="body">
    <div>
        <div>
            <ul>
                <li>Attack Speed:<span id="ats">0</span></li>
                <li>Balance:<span id="bal">0</span></li>
                <li>Critical Rate:<span id="crit">31</span></li>
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
        <div class="fillerContainer">
            <div class="labels">
                <label>Neamhain</label>
                <select autocomplete="off">
                    <option value='{"att":"0","matt":"0","crit":"0"}' selected="selected">None</option>
                    <option value='{"att":"500","matt":"500","crit":"1"}'>1%</option>
                    <option value='{"att":"500","matt":"500","crit":"1"}'>25%</option>
                    <option value='{"att":"750","matt":"750","crit":"2"}'>50%</option>
                    <option value='{"att":"750","matt":"750","crit":"3"}'>75%</option>
                    <option value='{"att":"1000","matt":"1000","crit":"5"}'>100%</option>
                </select>
            </div>

            <div class="labels">
                <label>Balor</label>
                <select autocomplete="off">
                    <option value='{"att":"0","matt":"0","crit":"0"}' selected="selected">None</option>
                    <option value='{"att":"500","matt":"500","crit":"1"}'>1%</option>
                    <option value='{"att":"500","matt":"500","crit":"1"}'>25%</option>
                    <option value='{"att":"750","matt":"750","crit":"2"}'>50%</option>
                    <option value='{"att":"750","matt":"750","crit":"3"}'>75%</option>
                    <option value='{"att":"1000","matt":"1000","crit":"5"}'>100%</option>
                </select>
            </div>

            <div class="labels">
                <label>Brigit</label>
                <select autocomplete="off">
                    <option value='{"att":"0","matt":"0","crit":"0"}' selected="selected">None</option>
                    <option value='{"att":"500","matt":"500","crit":"1"}'>1%</option>
                    <option value='{"att":"500","matt":"500","crit":"1"}'>25%</option>
                    <option value='{"att":"750","matt":"750","crit":"2"}'>50%</option>
                    <option value='{"att":"750","matt":"750","crit":"3"}'>75%</option>
                    <option value='{"att":"1000","matt":"1000","crit":"5"}'>100%</option>
                </select>
            </div>

            <div class="labels">
                <label>Laura</label>
                <select autocomplete="off">
                    <option value='{"att":"0","matt":"0","crit":"0"}' selected="selected">None</option>
                    <option value='{"att":"500","matt":"500","crit":"1"}'>1%</option>
                    <option value='{"att":"500","matt":"500","crit":"1"}'>25%</option>
                    <option value='{"att":"750","matt":"750","crit":"2"}'>50%</option>
                    <option value='{"att":"750","matt":"750","crit":"3"}'>75%</option>
                    <option value='{"att":"1000","matt":"1000","crit":"5"}'>100%</option>
                </select>
            </div>

            <div class="labels">
                <label>Outfit</label>
                <select autocomplete="off">
                    <option value='{"att":"0","matt":"0","bal":"0"}' selected="selected">None</option>
                    <option value='{"att":"250","matt":"250"}'>Regular</option>
                    <option value='{"att":"500","matt":"500","bal":"2"}'>Premium</option>
                </select>
            </div>

            <div class="labels">
                <label>Ein Lacher</label>
                <select autocomplete="off">
                    <option value='{"bal":"0","crit":"0"}' selected="selected">None</option>
                    <option value='{"bal":"3","crit":"1"}'>Silver</option>
                    <option value='{"bal":"5","crit":"3"}'>Gold</option>
                </select>
            </div>
        </div>
    </div>
    <div class="gearContainer">
        <div>
            <!------------------------------- WEAPON ------------------------------------>
            @include('_gear.weapon.weapon')
            <!------------------------------- ARMOR ------------------------------------->
            @include('_gear.armor.head')
            @include('_gear.armor.chest')
            @include('_gear.armor.legs')
            @include('_gear.armor.hands')
            @include('_gear.armor.feet')
        </div>
        <!-------------------------------- ACCESSORIES ------------------------------>
        <div>
            @include('_gear.accessories.earrings')
            @include('_gear.accessories.belt')
            @include('_gear.accessories.rings')
            @include('_gear.accessories.brooch')
            @include('_gear.accessories.totem')
            @include('_gear.accessories.necklace')
            @include('_gear.accessories.artifact')
        </div>
    </div>
</div>
@endsection