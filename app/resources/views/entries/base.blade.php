@extends('layouts.app')
@section('content')
<div class="form-group">
    <label for="description">Descrição</label>
    <input class="form-control" id="description" name="description" value="{{$entry->description ?? ''}}" />
</div>
<div class="form-group">
    <label for="group">Grupo</label>
    <select id="group" class="custom-select">
        <option @if(!$entry->group) selected @endif disabled>Selecione uma opção</option>
        @foreach($groups as $group)
        <option value="{{$group->id}}" @if($entry->group == $group) selected @endif>{{$group->description}}</option>
        @endforeach
    </select>
</div>
@endsection

