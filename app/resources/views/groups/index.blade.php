@extends('layouts.app')
@section('breadcrumb')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Categorias</li>
</ol>
@endsection
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Categorias
            </div>
            <div class="card-body">
                @if(count($groups))
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="w-25" scope="col">#</th>
                                <th class="w-auto" scope="col">Descrição</th>
                                <th class="w-25 text-center">
                                    <a href="/groups/create">
                                        <img src="/icons/plus-circle.svg" />
                                    </a>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($groups as $group)
                            <tr>
                                <th scope="row">{{$group->id}}</th>
                                <td>{{$group->description}}</td>
                                <td class="text-center">
                                    <form action="/groups/{{$group->id}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <a href="/groups/{{$group->id}}/edit">
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
                    Nenhum grupo encontrado. Clique <a href="/groups/create">aqui</a> para começar a criar.
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection
