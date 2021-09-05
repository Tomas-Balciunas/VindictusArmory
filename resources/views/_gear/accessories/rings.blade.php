<div class="container">
    <img src="{{asset('img/rings.jpg')}}" class="gearIcons">
    <div class="labels">
        <label>Enhancement</label>
        <select autocomplete="off">
            <option value='{"att":"0","matt":"0"}' selected="selected">None</option>
            @for ($i = 1; $i < 21; $i++) <option value="{{$i}}">+{{$i}}</option>
                @endfor
        </select>
    </div>

    <div class="labels">
        <label for="ring">Type</label>
        <select id="ring" autocomplete="off">
            <option value='{"att":"0", "matt":"0","def":"0", "cres":"0","ats":"0","bal":"0","crit":"0"}' selected="selected">None</option>
            @foreach ($ring as $item)
            <option value="{{$item}}">{{$item->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="labels">
        <label>Prefix</label>
        <select autocomplete="off">
            <option value='{"def":"0", "cres":"0","ats":"0","bal":"0","crit":"0"}' selected="selected">None</option>
            @foreach ($ringPrefix as $prefix)
            <option value="{{$prefix}}">{{$prefix->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="labels">
        <label>Suffix</label>
        <select autocomplete="off">
            <option value='{"def":"0", "cres":"0","ats":"0","bal":"0","crit":"0"}' selected="selected">None</option>
            @foreach ($ringSuffix as $suffix)
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
<div class="container">
    <img src="{{asset('img/rings.jpg')}}" class="gearIcons">
    <div class="labels">
        <label>Enhancement</label>
        <select autocomplete="off">
            <option value='{"att":"0","matt":"0"}' selected="selected">None</option>
            @for ($i = 1; $i < 21; $i++) <option value="{{$i}}">+{{$i}}</option>
                @endfor
        </select>
    </div>

    <div class="labels">
        <label for="ring">Type</label>
        <select id="ring" autocomplete="off">
            <option value='{"att":"0", "matt":"0","def":"0", "cres":"0","ats":"0","bal":"0","crit":"0"}' selected="selected">None</option>
            @foreach ($ring as $item)
            <option value="{{$item}}">{{$item->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="labels">
        <label>Prefix</label>
        <select autocomplete="off">
            <option value='{"def":"0", "cres":"0","ats":"0","bal":"0","crit":"0"}' selected="selected">None</option>
            @foreach ($ringPrefix as $prefix)
            <option value="{{$prefix}}">{{$prefix->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="labels">
        <label>Suffix</label>
        <select autocomplete="off">
            <option value='{"def":"0", "cres":"0","ats":"0","bal":"0","crit":"0"}' selected="selected">None</option>
            @foreach ($ringSuffix as $suffix)
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