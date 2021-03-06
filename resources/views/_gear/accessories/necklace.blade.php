<div class="container">
    <div class="iconCont">
        <img src="{{asset('img/necklace.png')}}" class="gearIcons">
    </div>
    <div class="selectCont">
        <div class="labels">
            <select id="necklace" autocomplete="off">
                <option value="0" selected="selected" disabled>Type</option>
                <option value='0'>None</option>
                @foreach ($necklace as $item)
                <option value="{{$item}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="labels">
            <select autocomplete="off">
                <option selected="selected" disabled>Prefix</option>
                <option value='0'>None</option>
                @foreach ($necklacePrefix as $prefix)
                <option value="{{$prefix}}">{{$prefix->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="labels">
            <select autocomplete="off">
                <option selected="selected" disabled>Suffix</option>
                <option value='0'>None</option>
                @foreach ($necklaceSuffix as $suffix)
                <option value="{{$suffix}}">{{$suffix->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="labels">
            <select autocomplete="off">
                <option selected="selected" disabled>Infusion</option>
                <option value='0'>None</option>
                <option value='{"ats":"1"}'>+1 ats</option>
                <option value='{"bal":"1"}'>+1 bal</option>
                <option value='{"crit":"1"}'>+1 crit</option>
                <option value='{"bal":"2"}'>+2 bal</option>
                <option value='{"crit":"2"}'>+2 crit</option>
            </select>
        </div>
    </div>
</div>