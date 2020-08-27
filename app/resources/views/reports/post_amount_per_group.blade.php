@extends('layouts.app')
@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item">Relatórios</li>
        <li class="breadcrumb-item"><a href="/reports/amount-per-group">Custos por Categoria</a></li>
        <li class="breadcrumb-item active" aria-current="page">Relatório</li>
    </ol>
@endsection
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                {{$title}}
            </div>
            <div class="card-body">
                <table width="100%">
                    <tr>
                    @if(count($groups))
                        @foreach($groups as $position => $childGroup)
                            <td align="center">
                                <div style="height: 300px; width: 300px;" id="chart_{{$childGroup->id}}"></div>
                                @if(count($childGroup->children))
                                    <a href="?year={{$year}}&group_id={{$childGroup->id}}" class="btn btn-sm btn-link" role="button">
                                        <img src="/icons/funnel.svg" alt="Detalhar Categoria" />
                                        <span>Detalhar</span>
                                    </a>
                                @endif
                                <a href="/entries/?group_id={{$childGroup->id}}" class="btn btn-sm btn-link" role="button">
                                    <img src="/icons/journal-text.svg" alt="Visualizar Dados" />
                                    <span>Dados</span>
                                </a>
                            </td>
                            @if(($position + 1) % 3 == 0)
                                </tr>
                                <tr>
                            @endif
                        @endforeach
                    @else
                        <div class="alert alert-info">
                            Nenhuma categoria encontrada. Clique <a href="/groups">aqui</a> para criar.
                        </div>
                    @endif
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('body_end')
    <!-- Scripts -->
    <script src="{{ asset('js/chart.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/chart.css') }}" rel="stylesheet">

    <script>
        window.onload = function () {
            @foreach($groups as $childGroup)
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
        };
    </script>
@endsection
