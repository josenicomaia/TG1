@extends('layouts.app')
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
                                <th class="w-25" scope="col">#</th>
                                <th class="w-auto" scope="col">Description</th>
                                <th class="w-25 text-center">
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
                                    <td>{{$entry->description}}</td>
                                    <td class="text-center">
                                        <form action="/entries/{{$entry->id}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <a href="/entries/{{$entry->id}}/edit">
                                                <img src="/icons/pencil.svg" />
                                                Editar
                                            </a>
                                            <button type="submit" class="btn btn-link">
                                                <img src="/icons/x-circle.svg" />
                                                Apagar
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
                        Nenhum grupo encontrado. Clique <a href="/entries/create">aqui</a> para começar a criar.
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
