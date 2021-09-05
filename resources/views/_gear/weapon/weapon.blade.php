<div class="container">
    <div class="iconCont">
        <img src="{{asset('img/weapon.png')}}" class="gearIcons">
    </div>
    <div class="selectCont">
        <div class="labels">
            <label for="weapon">Type</label>
            <select id="weapon" autocomplete="off">
                <option value='{"ats":"0","bal":"0","crit":"0"}' selected="selected">None</option>
                @foreach ($weapons as $weapon)
                <option value="{{$weapon}}">{{$weapon->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="labels">
            <label for="weaponprefix">Prefix</label>
            <select id="weaponprefix" autocomplete="off">
                <option value='{"ats":"0","bal":"0","crit":"0"}' selected="selected">None</option>
                @foreach ($weaponPrefix as $prefix)
                <option value="{{$prefix}}">{{$prefix->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="labels">
            <label for="weaponsuffix">Suffix</label>
            <select id="weaponsuffix" autocomplete="off">
                <option value='{"ats":"0","bal":"0","crit":"0"}' selected="selected">None</option>
                @foreach ($weaponSuffix as $suffix)
                <option value="{{$suffix}}">{{$suffix->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="labels">
            <label for="wepLvl">Enhancement</label>
            <select id="wepLvl" autocomplete="off">
                <option value='{"ats":"0"}' selected="selected">None</option>
                <option value='{"ats":"11"}'>+10</option>
                <option value='{"ats":"38"}'>+15</option>
            </select>
        </div>

        <div class="labels">
            <label>Quality</label>
            <select class="quality">
                <option value="2">★2</option>
                <option value="3">★3</option>
                <option value="4">★4</option>
                <option value="5">★4</option>
            </select>
        </div>

        <div class="labels">
            <label for="weaponinfu">Infusion</label>
            <select id="weaponinfu" autocomplete="off">
                <option value='{"ats":"0","bal":"0","crit":"0"}' selected="selected">None</option>
                <option value='{"ats":"1"}'>+1 ats</option>
                <option value='{"bal":"1"}'>+1 bal</option>
                <option value='{"crit":"1"}'>+1 crit</option>
                <option value='{"bal":"2"}'>+2 bal</option>
                <option value='{"crit":"2"}'>+2 crit</option>
            </select>
        </div>
    </div>
</div>