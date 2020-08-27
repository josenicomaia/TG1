@extends('layouts.app')
@section('content')
    <div class="form-group">
        <label for="at">Quando <span class="required">*</span></label>
        <input type="date" class="form-control" id="at" name="at" value="{{$goal->at->format('Y-m-d')}}" />
    </div>
    <div class="form-group">
        <label for="group_id">Categoria <span class="required">*</span></label>
        <select id="group_id" name="group_id" class="custom-select">
            <option @if(!$goal->group) selected @endif disabled>Selecione uma opção</option>
            @foreach($groups as $group)
                <option value="{{$group->id}}" @if($goal->group && $goal->group->id == $group->id) selected @endif>
                    {{$group->getFullDescription()}}
                </option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="limit">Valor <span class="required">*</span></label>
        <input class="form-control" id="limit" name="limit" value="{{$goal->limit ?? ''}}" />
    </div>
@endsection

