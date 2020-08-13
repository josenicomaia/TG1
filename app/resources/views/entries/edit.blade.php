    @extends('entries.base')
    @section('breadcrumb')
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/entries">Movimentações Financeiras</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cadastrar Editar Movimentação Financeira</li>
        </ol>
    @endsection
    @section('content')
    <div class="container">
    <div class="card">
        <div class="card-header">
            Editar Movimentação Financeira
        </div>
        <div class="card-body">
            <form action="/entries/{{$entry->id}}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="id">ID</label>
                    <input class="form-control" id="id" value="{{$entry->id}}" disabled />
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
