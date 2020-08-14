@extends('layouts.app')
@section('content')
    @isset($group->group)
        <div class="form-group">
            <label for="id">Categoria Pai</label>
            <input type="hidden" name="group_id" value="{{$group->group_id}}" />
            <input class="form-control" id="id" value="{{$group->group->getOrderPath()}} - {{$group->group->description}}" disabled />
        </div>
    @endisset
    <div class="form-group">
        <label for="description">Ordem <span class="required">*</span></label>
        <input class="form-control" id="order" name="order" value="{{$group->getOrder()}}" />
    </div>
    <div class="form-group">
        <label for="description">Descrição <span class="required">*</span></label>
        <input class="form-control" id="description" name="description" value="{{$group->description ?? ''}}" />
    </div>
@endsection
