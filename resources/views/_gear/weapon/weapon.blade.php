<div class="container">
    <div class="iconCont">
        <img src="{{asset('img/weapon.png')}}" class="gearIcons">
    </div>
    <div class="selectCont">
        <div class="labels">
            <select id="weapon" class="type" autocomplete="off">
                <option value="0" selected="selected" disabled>Type</option>
                <option value='0'>None</option>
                @foreach ($weapons as $weapon)
                <option value="{{$weapon}}">{{$weapon->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="labels">
            <select id="weaponprefix" autocomplete="off">
                <option selected="selected" disabled>Prefix</option>
                <option value='0'>None</option>
                @foreach ($weaponPrefix as $prefix)
                <option value="{{$prefix}}">{{$prefix->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="labels">
            <select id="weaponsuffix" autocomplete="off">
                <option selected="selected" disabled>Suffix</option>
                <option value='0'>None</option>
                @foreach ($weaponSuffix as $suffix)
                <option value="{{$suffix}}">{{$suffix->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="labels">
            <select id="wepLvl" autocomplete="off">
                <option selected="selected" disabled>Enhancement</option>
                <option value='0'>None</option>
                <option value='{"ats":"11"}'>+10</option>
                <option value='{"ats":"38","att":"4000","matt":"0"}'>+15</option>
            </select>
        </div>

        <div class="labels">
            <select class="quality" autocomplete="off">
                <option value="2" selected="selected" disabled>Quality</option>
                <option value="2">★2</option>
                <option value="3">★3</option>
                <option value="4">★4</option>
                <option value="5">★5</option>
            </select>
        </div>

        <div class="labels">
            <select id="weaponinfu" autocomplete="off">
                <option selected="selected" disabled>Infusion</option>
                <option value='0'>None</option>
                <option value='{"ats":"1"}'>+1 ats</option>
                <option value='{"bal":"1"}'>+1 bal</option>
                <option value='{"crit":"1"}'>+1 crit</option>
                <option value='{"bal":"2"}'>+2 bal</option>
                <option value='{"crit":"2"}'>+2 crit</option>
            </select>
        </div>
    </div>
</div>