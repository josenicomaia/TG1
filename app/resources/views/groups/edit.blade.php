@extends('groups.base')
@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="/groups">Categorias</a></li>
        <li class="breadcrumb-item active" aria-current="page">Editar Categoria</li>
    </ol>
@endsection
@section('content')
    <div class="container">
    <div class="card">
        <div class="card-header">
            Editar Categoria
        </div>
        <div class="card-body">
            <form action="/groups/{{$group->id}}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="id">ID</label>
                    <input class="form-control" id="id" value="{{$group->id}}" disabled />
                </div>
                @parent
                <div class="dropdown-divider"></div>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
