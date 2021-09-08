<div class="container">
    <div class="selectCont">
        <div class="labels">
            <select id="artifact" autocomplete="off">
                <option value='{}' selected="selected" disabled>Artifact</option>
                @foreach ($artifact as $item)
                <option value="{{$item}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="labels">
            <select autocomplete="off">
                <option selected="selected" disabled>Prefix</option>
                <option value='0'>None</option>
                @foreach ($artifactPrefix as $prefix)
                <option value="{{$prefix}}">{{$prefix->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="labels">
            <select autocomplete="off">
                <option selected="selected" disabled>Suffix</option>
                <option value='0'>None</option>
                @foreach ($artifactSuffix as $suffix)
                <option value="{{$suffix}}">{{$suffix->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>