@extends('layouts.app')
@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item">Relatórios</li>
        <li class="breadcrumb-item active" aria-current="page">Custos por Categoria</li>
    </ol>
@endsection
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Relatório de Custos por Categoria
            </div>
            <div class="card-body">
                <form method="get">
                    <div class="form-group">
                        <label for="group_id">Ano <span class="required">*</span></label>
                        <select id="group_id" name="year" class="custom-select">
                            <option selected disabled>Selecione uma opção</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                        </select>
                    </div>
                    <div class="dropdown-divider"></div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Exibir</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
