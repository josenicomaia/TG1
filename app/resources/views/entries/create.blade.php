@extends('entries.base')
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
