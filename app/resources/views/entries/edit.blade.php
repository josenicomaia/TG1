    @extends('entries.base')
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
