<div class="container">
    <div class="iconCont">
        <img src="{{asset('img/boots.png')}}" class="gearIcons">
    </div>
    <div class="selectCont">
        <div class="labels">
            <select id="feetA" class="type" autocomplete="off">
                <option value="0" selected="selected" disabled>Type</option>
                <option value='0'>None</option>
                @foreach ($feetArmor as $feet)
                <option value="{{$feet}}">{{$feet->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="labels">
            <select id="feetPre" autocomplete="off">
                <option selected="selected" disabled>Prefix</option>
                <option value='0'>None</option>
                @foreach ($feetPrefix as $prefix)
                <option value="{{$prefix}}">{{$prefix->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="labels">
            <select id="feetSuf" autocomplete="off">
                <option selected="selected" disabled>Suffix</option>
                <option value='0'>None</option>
                @foreach ($feetSuffix as $suffix)
                <option value="{{$suffix}}">{{$suffix->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="labels">
            <select id="feetLvl" autocomplete="off">
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
            <select id="feetInfu" autocomplete="off">
                <option selected="selected" disabled>Infusion</option>
                <option value='0'>None</option>
                <option value='{"def":"102"}'>+102 def</option>
                <option value='{"cres":"1"}'>+1 c.res</option>
                <option value='{"cres":"2"}'>+2 c.res</option>
            </select>
        </div>
    </div>
</div>