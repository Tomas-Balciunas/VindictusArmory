<div class="container">
    <div class="iconCont">
        <img src="{{asset('img/boots.png')}}" class="gearIcons">
    </div>
    <div class="selectCont">
        <div class="labels">
            <label for="feetA">Type</label>
            <select id="feetA" class="type" autocomplete="off">
                <option value='0' selected="selected">None</option>
                @foreach ($feetArmor as $feet)
                <option value="{{$feet}}">{{$feet->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="labels">
            <label for="feetPre">Prefix</label>
            <select id="feetPre" autocomplete="off">
                <option value='0' selected="selected">None</option>
                @foreach ($feetPrefix as $prefix)
                <option value="{{$prefix}}">{{$prefix->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="labels">
            <label for="feetSuf">Suffix</label>
            <select id="feetSuf" autocomplete="off">
                <option value='0' selected="selected">None</option>
                @foreach ($feetSuffix as $suffix)
                <option value="{{$suffix}}">{{$suffix->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="labels">
            <label for="feetLvl">Enhancement</label>
            <select id="feetLvl" autocomplete="off">
                <option value='0' selected="selected">None</option>
                <option value='{"def":"189"}'>+10</option>
                <option value='{"def":"384"}'>+15</option>
            </select>
        </div>

        <div class="labels">
            <label>Quality</label>
            <select class="quality" autocomplete="off">
                <option value="2">★2</option>
                <option value="3">★3</option>
                <option value="4">★4</option>
                <option value="5">★5</option>
            </select>
        </div>

        <div class="labels">
            <label for="feetInfu">Infusion</label>
            <select id="feetInfu" autocomplete="off">
                <option value='0' selected="selected">None</option>
                <option value='{"def":"102"}'>+102 def</option>
                <option value='{"cres":"1"}'>+1 c.res</option>
                <option value='{"cres":"2"}'>+2 c.res</option>
            </select>
        </div>
    </div>
</div>