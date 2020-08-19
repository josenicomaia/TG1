@extends('layouts.app')
@section('content')
    @foreach($groups as $parentGroup)
        <div class="container">
            <div>
                <h4>{{$parentGroup->getFullDescription()}}</h4>
            </div>
            <table>
                <tr>
                @foreach($parentGroup->children as $position => $childGroup)
                    <td>
                        <div style="height: 300px; width: 300px;" id="chart_{{$childGroup->id}}"></div>
                    </td>
                    @if(($position + 1) % 4 == 0)
                        </tr>
                        <tr>
                    @endif
                @endforeach
                </tr>
            </table>
        </div>
    @endforeach
@endsection
@section('body_end')
    <!-- Scripts -->
    <script src="{{ asset('js/chart.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/chart.css') }}" rel="stylesheet">

    <script>
        window.onload = function () {
            @foreach($groups as $parentGroup)
                @foreach($parentGroup->children as $childGroup)
                    const chart_{{$childGroup->id}} = new Chartisan({
                        el: '#chart_{{$childGroup->id}}',
                        url: "@chart('group_chart')?year={{$year}}&group_id={{$childGroup->id}}",
                        loader: {
                            color: '#000',
                            size: [35, 35],
                            type: 'bar',
                            textColor: '#a0aec0',
                            text: 'Carregando...'
                        },
                        hooks: new ChartisanHooks()
                            .colors()
                            .responsive()
                            .legend(false)
                            .beginAtZero()
                            .borderColors()
                            .title('{{$childGroup->getFullDescription()}}')
                            .datasets(['bar']),
                    });
                @endforeach
            @endforeach
        };
    </script>
@endsection
