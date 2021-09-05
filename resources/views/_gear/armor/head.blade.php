<div class="container">
    <img src="{{asset('img/helmet.png')}}" class="gearIcons">
    <div class="labels">
        <label for="headLvl">Enhancement</label>
        <select id="headLvl" autocomplete="off">
            <option value='{"def":"0"}' selected="selected">None</option>
            <option value='{"def":"189"}'>+10</option>
            <option value='{"def":"384"}'>+15</option>
        </select>
    </div>
    <div class="labels">
        <label for="headA">Type</label>
        <select id="headA" autocomplete="off">
            <option value='{"bal":"0","def":"0", "cres":"0"}' selected="selected">None</option>
            @foreach ($headArmor as $head)
            <option value="{{$head}}">{{$head->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="labels">
        <label for="headPre">Prefix</label>
        <select id="headPre" autocomplete="off">
            <option value='{"def":"0", "cres":"0","ats":"0","bal":"0","crit":"0"}' selected="selected">None</option>
            @foreach ($headPrefix as $prefix)
            <option value="{{$prefix}}">{{$prefix->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="labels">
        <label for="headSuf">Suffix</label>
        <select id="headSuf" autocomplete="off">
            <option value='{"def":"0", "cres":"0","ats":"0","bal":"0","crit":"0"}' selected="selected">None</option>
            @foreach ($headSuffix as $suffix)
            <option value="{{$suffix}}">{{$suffix->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="labels">
        <label for="headInfu">Infusion</label>
        <select id="headInfu" autocomplete="off">
            <option value='{"def":"0","cres":"0"}' selected="selected">None</option>
            <option value='{"def":"102"}'>+102 def</option>
            <option value='{"cres":"1"}'>+1 c.res</option>
            <option value='{"cres":"2"}'>+2 c.res</option>
        </select>
    </div>
</div>