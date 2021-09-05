<div class="container">
    <img src="{{asset('img/brooch.png')}}" class="gearIcons">
    <div class="labels">
        <label for="brooch">Type</label>
        <select id="brooch" autocomplete="off">
            <option value='{"att":"0", "matt":"0","def":"0", "cres":"0","ats":"0","bal":"0","crit":"0"}' selected="selected">None</option>
            @foreach ($brooch as $item)
            <option value="{{$item}}">{{$item->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="labels">
        <label>Prefix</label>
        <select autocomplete="off">
            <option value='{"def":"0", "cres":"0","ats":"0","bal":"0","crit":"0"}' selected="selected">None</option>
            @foreach ($broochPrefix as $prefix)
            <option value="{{$prefix}}">{{$prefix->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="labels">
        <label>Suffix</label>
        <select autocomplete="off">
            <option value='{"def":"0", "cres":"0","ats":"0","bal":"0","crit":"0"}' selected="selected">None</option>
            @foreach ($broochSuffix as $suffix)
            <option value="{{$suffix}}">{{$suffix->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="labels">
        <label>Infusion</label>
        <select autocomplete="off">
            <option value='{"ats":"0","bal":"0","crit":"0"}' selected="selected">None</option>
            <option value='{"ats":"1"}'>+1 ats</option>
            <option value='{"bal":"1"}'>+1 bal</option>
            <option value='{"crit":"1"}'>+1 crit</option>
            <option value='{"bal":"2"}'>+2 bal</option>
            <option value='{"crit":"2"}'>+2 crit</option>
        </select>
    </div>
</div>