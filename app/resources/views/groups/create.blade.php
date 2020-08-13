@extends('groups.base')
@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="/groups">Categorias</a></li>
        <li class="breadcrumb-item active" aria-current="page">Cadastrar Categoria</li>
    </ol>
@endsection
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            Cadastrar Categoria
        </div>
        <div class="card-body">
            <form action="/groups" method="post">
                @csrf
                @parent
                <div class="dropdown-divider"></div>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('body_end')
<script>
    document.getElementById('description').focus();
</script>
@endsection
