@extends('entries.base')
@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="/entries">Movimentações Financeiras</a></li>
        <li class="breadcrumb-item active" aria-current="page">Cadastrar Movimentação Financeira</li>
    </ol>
@endsection
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            Cadastrar Movimentação Financeira
        </div>
        <div class="card-body">
            <form action="/entries" method="post">
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
