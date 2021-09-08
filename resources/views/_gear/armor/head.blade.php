<div class="container">
    <div class="iconCont">
        <img src="{{asset('img/helmet.png')}}" class="gearIcons">
    </div>
    <div class="selectCont">
        <div class="labels">
            <select id="headA" class="type" autocomplete="off">
                <option value="0" selected="selected" disabled>Type</option>
                <option value='0'>None</option>
                @foreach ($headArmor as $head)
                <option value="{{$head}}">{{$head->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="labels">
            <select id="headPre" autocomplete="off">
                <option selected="selected" disabled>Prefix</option>
                <option value='0'>None</option>
                @foreach ($headPrefix as $prefix)
                <option value="{{$prefix}}">{{$prefix->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="labels">
            <select id="headSuf" autocomplete="off">
                <option selected="selected" disabled>Suffix</option>
                <option value='0'>None</option>
                @foreach ($headSuffix as $suffix)
                <option value="{{$suffix}}">{{$suffix->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="labels">
            <select id="headLvl" autocomplete="off">
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
            <select id="headInfu" autocomplete="off">
                <option selected="selected" disabled>Infusion</option>
                <option value='0'>None</option>
                <option value='{"def":"102"}'>+102 def</option>
                <option value='{"cres":"1"}'>+1 c.res</option>
                <option value='{"cres":"2"}'>+2 c.res</option>
            </select>
        </div>
    </div>
</div>