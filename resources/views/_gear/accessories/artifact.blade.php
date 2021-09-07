<div class="container">
    <div class="selectCont">
        <div class="labels">
            <label for="artifact">Type</label>
            <select id="artifact" autocomplete="off">
                <option value='{}' selected="selected">Artifact</option>
                @foreach ($artifact as $item)
                <option value="{{$item}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="labels">
            <label>Prefix</label>
            <select autocomplete="off">
                <option value='0' selected="selected">None</option>
                @foreach ($artifactPrefix as $prefix)
                <option value="{{$prefix}}">{{$prefix->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="labels">
            <label>Suffix</label>
            <select autocomplete="off">
                <option value='0' selected="selected">None</option>
                @foreach ($artifactSuffix as $suffix)
                <option value="{{$suffix}}">{{$suffix->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>