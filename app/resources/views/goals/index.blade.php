@extends('layouts.app')
@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Metas</li>
    </ol>
@endsection
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Metas
            </div>
            <div class="card-body">
                @if(count($goals))
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
                                    <a href="/goals/create">
                                        <img src="/icons/plus-circle.svg" />
                                    </a>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($goals as $goal)
                                <tr>
                                    <th scope="row">{{$goal->id}}</th>
                                    <td>{{$goal->getFormattedAt()}}</td>
                                    <td>{{$goal->group->getFullDescription()}}</td>
                                    <td>{{$goal->getFormattedAmount()}}</td>
                                    <td>{{$goal->description}}</td>
                                    <td class="text-center">
                                        <form action="/goals/{{$goal->id}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <a href="/goals/{{$goal->id}}/edit" class="btn btn-sm btn-link" role="button">
                                                <img src="/icons/pencil.svg" alt="Editar" />
                                            </a>
                                            <button type="submit" class="btn btn-sm btn-link" role="link" onclick="return confirm('Tem certeza que deseja apagar \'{{$goal->id}}\'')">
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
                        Nenhuma meta encontrada. Clique <a href="/goals/create">aqui</a> para começar a criar.
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
