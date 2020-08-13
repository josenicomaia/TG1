@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Grupos
            </div>
            <div class="card-body">
                @if(count($groups))
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="w-25" scope="col">#</th>
                                <th class="w-50" scope="col">Description</th>
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
                                    <a href="/groups/{{$group->id}}/edit">
                                        <img src="/icons/pencil.svg" />
                                        Editar
                                    </a>
                                    <a href="/groups/{{$group->id}}">
                                        <img src="/icons/x-circle.svg" />
                                        Apagar
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @else
                <div class="alert alert-info">
                    Nenhum grupo encontrado.
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection
