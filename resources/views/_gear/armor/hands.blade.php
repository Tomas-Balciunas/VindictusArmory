<div class="container">
    <img src="{{asset('img/gloves.png')}}" class="gearIcons">
    <div class="labels">
        <label for="handLvl">Enhancement</label>
        <select id="handLvl" autocomplete="off">
            <option value='{"def":"0"}' selected="selected">None</option>
            <option value='{"def":"189"}'>+10</option>
            <option value='{"def":"384"}'>+15</option>
        </select>
    </div>
    <div class="labels">
        <label for="handA">Type</label>
        <select id="handA" autocomplete="off">
            <option value='{"bal":"0","def":"0", "cres":"0"}' selected="selected">None</option>
            @foreach ($handArmor as $hand)
            <option value="{{$hand}}">{{$hand->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="labels">
        <label for="handPre">Prefix</label>
        <select id="handPre" autocomplete="off">
            <option value='{"def":"0", "cres":"0","ats":"0","bal":"0","crit":"0"}' selected="selected">None</option>
            @foreach ($handPrefix as $prefix)
            <option value="{{$prefix}}">{{$prefix->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="labels">
        <label for="handSuf">Suffix</label>
        <select id="handSuf" autocomplete="off">
            <option value='{"def":"0", "cres":"0","ats":"0","bal":"0","crit":"0"}' selected="selected">None</option>
            @foreach ($handSuffix as $suffix)
            <option value="{{$suffix}}">{{$suffix->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="labels">
        <label for="handInfu">Infusion</label>
        <select id="handInfu" autocomplete="off">
            <option value='{"def":"0","cres":"0"}' selected="selected">None</option>
            <option value='{"def":"102"}'>+102 def</option>
            <option value='{"cres":"1"}'>+1 c.res</option>
            <option value='{"cres":"2"}'>+2 c.res</option>
        </select>
    </div>
</div>