@extends('layouts.app')
@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Movimentações Financeiras</li>
    </ol>
@endsection
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Movimentações Financeiras
            </div>
            <div class="card-body">
                @if(count($entries))
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Quando</th>
                                <th scope="col">Categoria</th>
                                <th scope="col">Valor</th>
                                <th scope="col">Descrição</th>
                                <th class="text-center">
                                    <a href="/entries/create">
                                        <img src="/icons/plus-circle.svg" />
                                    </a>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($entries as $entry)
                                <tr>
                                    <th scope="row">{{$entry->id}}</th>
                                    <td>{{$entry->getFormattedAt()}}</td>
                                    <td>{{$entry->group->getFullDescription()}}</td>
                                    <td>{{$entry->getFormattedAmount()}}</td>
                                    <td>{{$entry->description}}</td>
                                    <td class="text-center">
                                        <form action="/entries/{{$entry->id}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <a href="/entries/{{$entry->id}}/edit" class="btn btn-sm btn-link" role="button">
                                                <img src="/icons/pencil.svg" alt="Editar" />
                                            </a>
                                            <button type="submit" class="btn btn-sm btn-link" role="link" onclick="return confirm('Tem certeza que deseja apagar \'{{$entry->id}}\'')">
                                                <img src="/icons/x-circle.svg" alt="Apagar" />
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="alert alert-info">
                        Nenhuma movimentação financeira encontrada. Clique <a href="/entries/create">aqui</a> para começar a criar.
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
