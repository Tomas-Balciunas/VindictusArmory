<div class="container">
    <div class="iconCont">
        <img src="{{asset('img/greaves.png')}}" class="gearIcons">
    </div>
    <div class="selectCont">
        <div class="labels">
            <label for="legA">Type</label>
            <select id="legA" autocomplete="off">
                <option value='{"bal":"0","def":"0", "cres":"0"}' selected="selected">None</option>
                @foreach ($legArmor as $leg)
                <option value="{{$leg}}">{{$leg->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="labels">
            <label for="legPre">Prefix</label>
            <select id="legPre" autocomplete="off">
                <option value='{"def":"0", "cres":"0","ats":"0","bal":"0","crit":"0"}' selected="selected">None</option>
                @foreach ($legPrefix as $prefix)
                <option value="{{$prefix}}">{{$prefix->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="labels">
            <label for="legSuf">Suffix</label>
            <select id="legSuf" autocomplete="off">
                <option value='{"def":"0", "cres":"0","ats":"0","bal":"0","crit":"0"}' selected="selected">None</option>
                @foreach ($legSuffix as $suffix)
                <option value="{{$suffix}}">{{$suffix->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="labels">
            <label for="legLvl">Enhancement</label>
            <select id="legLvl" autocomplete="off">
                <option value='{"def":"0"}' selected="selected">None</option>
                <option value='{"def":"189"}'>+10</option>
                <option value='{"def":"384"}'>+15</option>
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
            <label for="legInfu">Infusion</label>
            <select id="legInfu" autocomplete="off">
                <option value='{"def":"0","cres":"0"}' selected="selected">None</option>
                <option value='{"def":"102"}'>+102 def</option>
                <option value='{"cres":"1"}'>+1 c.res</option>
                <option value='{"cres":"2"}'>+2 c.res</option>
            </select>
        </div>
    </div>
</div>