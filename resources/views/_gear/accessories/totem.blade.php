<div class="container">
    <div class="iconCont">
        <img src="{{asset('img/totem.png')}}" class="gearIcons">
    </div>
    <div class="selectCont">
        <div class="labels">
            <select class="type" autocomplete="off">
                <option value="0" selected="selected" disabled>Type</option>
                <option value='0'>None</option>
                @foreach ($totem as $item)
                <option value="{{$item}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="labels">
            <select autocomplete="off">
                <option value='0'>None</option>
                <option selected="selected" disabled>Prefix</option>
                @foreach ($totemPrefix as $prefix)
                <option value="{{$prefix}}">{{$prefix->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="labels">
            <select autocomplete="off">
                <option value='0'>None</option>
                <option selected="selected" disabled>Suffix</option>
                @foreach ($totemSuffix as $suffix)
                <option value="{{$suffix}}">{{$suffix->name}}</option>
                @endforeach
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