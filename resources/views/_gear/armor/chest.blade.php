<div class="container">
    <img src="{{asset('img/chest.png')}}" class="gearIcons">
    <div class="labels">
        <label for="chestLvl">Enhancement</label>
        <select id="chestLvl" autocomplete="off">
            <option value='{"def":"0"}' selected="selected">None</option>
            <option value='{"def":"189"}'>+10</option>
            <option value='{"def":"384"}'>+15</option>
        </select>
    </div>
    <div class="labels">
        <label for="chestA">Type</label>
        <select id="chestA" autocomplete="off">
            <option value='{"bal":"0","def":"0", "cres":"0"}' selected="selected">None</option>
            @foreach ($chestArmor as $chest)
            <option value="{{$chest}}">{{$chest->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="labels">
        <label for="chestPre">Prefix</label>
        <select id="chestPre" autocomplete="off">
            <option value='{"def":"0", "cres":"0","ats":"0","bal":"0","crit":"0"}' selected="selected">None</option>
            @foreach ($chestPrefix as $prefix)
            <option value="{{$prefix}}">{{$prefix->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="labels">
        <label for="chestSuf">Suffix</label>
        <select id="chestSuf" autocomplete="off">
            <option value='{"def":"0", "cres":"0","ats":"0","bal":"0","crit":"0"}' selected="selected">None</option>
            @foreach ($chestSuffix as $suffix)
            <option value="{{$suffix}}">{{$suffix->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="labels">
        <label for="chestInfu">Infusion</label>
        <select id="chestInfu" autocomplete="off">
            <option value='{"def":"0","cres":"0"}' selected="selected">None</option>
            <option value='{"def":"102"}'>+102 def</option>
            <option value='{"cres":"1"}'>+1 c.res</option>
            <option value='{"cres":"2"}'>+2 c.res</option>
        </select>
    </div>
</div>