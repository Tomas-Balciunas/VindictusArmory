<div class="container">
    <div class="iconCont">
        <img src="{{asset('img/gloves.png')}}" class="gearIcons">
    </div>
    <div class="selectCont">
        <div class="labels">
            <label for="handA">Type</label>
            <select id="handA" class="type" autocomplete="off">
                <option value='0' selected="selected">None</option>
                @foreach ($handArmor as $hand)
                <option value="{{$hand}}">{{$hand->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="labels">
            <label for="handPre">Prefix</label>
            <select id="handPre" autocomplete="off">
                <option value='0' selected="selected">None</option>
                @foreach ($handPrefix as $prefix)
                <option value="{{$prefix}}">{{$prefix->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="labels">
            <label for="handSuf">Suffix</label>
            <select id="handSuf" autocomplete="off">
                <option value='0' selected="selected">None</option>
                @foreach ($handSuffix as $suffix)
                <option value="{{$suffix}}">{{$suffix->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="labels">
            <label for="handLvl">Enhancement</label>
            <select id="handLvl" autocomplete="off">
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
            <label for="handInfu">Infusion</label>
            <select id="handInfu" autocomplete="off">
                <option value='0' selected="selected">None</option>
                <option value='{"def":"102"}'>+102 def</option>
                <option value='{"cres":"1"}'>+1 c.res</option>
                <option value='{"cres":"2"}'>+2 c.res</option>
            </select>
        </div>
    </div>
</div>