@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Resumo
            </div>
            <div class="card-body">
                <table width="100%">
                    <tr>
                        <td align="center">
                            <div style="height: 300px; width: 300px;" id="chart_{{$years[0]}}"></div>
                            <a href="/reports/amount-per-group?year={{$years[0]}}" class="btn btn-sm btn-link" role="button">
                                <img src="/icons/funnel.svg" alt="Detalhar Categoria" />
                                <span>Detalhar</span>
                            </a>
                            <a href="/entries/?year={{$years[0]}}" class="btn btn-sm btn-link" role="button">
                                <img src="/icons/journal-text.svg" alt="Visualizar Dados" />
                                <span>Dados</span>
                            </a>
                        </td>
                        <td align="center">
                            <div style="height: 300px; width: 300px;" id="chart_{{$years[1]}}"></div>
                            <a href="/reports/amount-per-group?year={{$years[1]}}" class="btn btn-sm btn-link" role="button">
                                <img src="/icons/funnel.svg" alt="Detalhar Categoria" />
                                <span>Detalhar</span>
                            </a>
                            <a href="/entries/?year={{$years[1]}}" class="btn btn-sm btn-link" role="button">
                                <img src="/icons/journal-text.svg" alt="Visualizar Dados" />
                                <span>Dados</span>
                            </a>
                        </td>
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
            const chart_{{$years[0]}} = new Chartisan({
                el: '#chart_{{$years[0]}}',
                url: "@chart('group_chart')?year={{$years[0]}}",
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
                    .title('Ano de {{$years[0]}}')
                    .datasets(['bar']),
            });

            const chart_{{$years[1]}} = new Chartisan({
                el: '#chart_{{$years[1]}}',
                url: "@chart('group_chart')?year={{$years[1]}}",
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
                    .title('Ano de {{$years[1]}}')
                    .datasets(['bar']),
            });
        };
    </script>
@endsection
