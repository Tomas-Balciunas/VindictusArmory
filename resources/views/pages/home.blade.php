@extends('main')
@section('content')
<h1>Vindi armory</h1>
<div class="body">
    <div class="left">
        <div>
            <ul>
                <li>Attack Speed:<span id="ats">0</span></li>
                <li>Balance:<span id="bal">0</span></li>
                <li>Critical Rate:<span id="crit">31</span></li>
                <li>Attack:<span id="att">486</span></li>
                <li>M. Attack:<span id="matt">700</span></li>
                <li>Defense:<span id="def">780</span></li>
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
                    <option value='0' selected="selected">None</option>
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
                    <option value='0' selected="selected">None</option>
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
                    <option value='0' selected="selected">None</option>
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
                    <option value='0' selected="selected">None</option>
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
                    <option value='0' selected="selected">None</option>
                    <option value='{"att":"250","matt":"250"}'>Regular</option>
                    <option value='{"att":"500","matt":"500","bal":"2"}'>Premium</option>
                </select>
            </div>

            <div class="labels">
                <label>Ein Lacher</label>
                <select autocomplete="off">
                    <option value='0' selected="selected">None</option>
                    <option value='{"bal":"3","crit":"1""att":"94"}'>Silver</option>
                    <option value='{"bal":"5","crit":"3","att":"197"}'>Gold</option>
                </select>
            </div>

            <div class="labels">
                <label>Partholon</label>
                <select autocomplete="off">
                    <option value='0' selected="selected">None</option>
                    <option value='{"att":"500","matt":"500","def":"300","crit":"1"}'>Max</option>
                </select>
            </div>

            <div class="labels">
                <label>VIP</label>
                <select autocomplete="off">
                    <option value='0' selected="selected">None</option>
                    <option value='{"att":"209","matt":"191","wil":"110"}'>VIP</option>
                </select>
            </div>
        </div>
        <div class="baseStats">
            <h4>Base Stats:</h4>
            <span>STR<input type="number" id="baseStr" min="0" max="9999" autocomplete="off" placeholder="0"></span>
            <span>AGI<input type="number" id="baseAgi" min="0" max="9999" autocomplete="off" placeholder="0"></span>
            <span>INT<input type="number" id="baseInt" min="0" max="9999" autocomplete="off" placeholder="0"></span>
            <span>WIL<input type="number" id="baseWil" min="0" max="9999" autocomplete="off" placeholder="0"></span>
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