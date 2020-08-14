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
                                <th scope="col">#</th>
                                <th width="66%" scope="col">Descrição</th>
                                <th width="33%" class="text-center">
                                    <a href="/groups/create">
                                        <img src="/icons/plus-circle.svg" />
                                    </a>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($groups as $group)
                                @include('groups.index_group_tr', $group)
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
