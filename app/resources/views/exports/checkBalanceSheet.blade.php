<table>
    <thead>
        <tr>
            <th colspan="2" rowspan="2">PLANO DE CONTAS</th>
            <th colspan="{{count($months)}}">{{$year}}</th>
        </tr>
        <tr>
            @foreach($months as $month)
            <th>{{$month}}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach($groups as $group)
            <tr>
                <td>{{$group->getOrderPath()}}</td>
                <td>{{$group->description}}</td>
                @foreach($months as $key => $month)
                    <td>{{$summedEntryWithKeys[$year][$key + 1][$group->id] ?? 0}}</td>
                @endforeach
            </tr>
        @endforeach
    </tbody>
</table>
