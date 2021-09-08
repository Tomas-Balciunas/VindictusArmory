<div class="container">
    <div class="iconCont">
        <img src="{{asset('img/greaves.png')}}" class="gearIcons">
    </div>
    <div class="selectCont">
        <div class="labels">
            <select id="legA" class="type" autocomplete="off">
                <option value="0" selected="selected" disabled>Type</option>
                <option value='0'>None</option>
                @foreach ($legArmor as $leg)
                <option value="{{$leg}}">{{$leg->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="labels">
            <select id="legPre" autocomplete="off">
                <option selected="selected" disabled>Prefix</option>
                <option value='0'>None</option>
                @foreach ($legPrefix as $prefix)
                <option value="{{$prefix}}">{{$prefix->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="labels">
            <select id="legSuf" autocomplete="off">
                <option selected="selected" disabled>Suffix</option>
                <option value='0'>None</option>
                @foreach ($legSuffix as $suffix)
                <option value="{{$suffix}}">{{$suffix->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="labels">
            <select id="legLvl" autocomplete="off">
                <option selected="selected" disabled>Enhancement</option>
                <option value='0'>None</option>
                <option value='{"def":"189"}'>+10</option>
                <option value='{"def":"384"}'>+15</option>
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
            <select id="legInfu" autocomplete="off">
                <option selected="selected" disabled>Infusion</option>
                <option value='0'>None</option>
                <option value='{"def":"102"}'>+102 def</option>
                <option value='{"cres":"1"}'>+1 c.res</option>
                <option value='{"cres":"2"}'>+2 c.res</option>
            </select>
        </div>
    </div>
</div>