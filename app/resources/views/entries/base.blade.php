@extends('layouts.app')
@section('content')
    <div class="form-group">
        <label for="at">Quando <span class="required">*</span></label>
        <input type="date" class="form-control" id="at" name="at" value="{{$entry->at->format('Y-m-d')}}" />
    </div>
    <div class="form-group">
        <label for="group_id">Categoria <span class="required">*</span></label>
        <select id="group_id" name="group_id" class="custom-select">
            <option @if(!$entry->group) selected @endif disabled>Selecione uma opção</option>
            @foreach($groups as $group)
                <option value="{{$group->id}}" @if($entry->group && $entry->group->id == $group->id) selected @endif>
                    {{$group->getFullDescription()}}
                </option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="amount">Valor <span class="required">*</span></label>
        <input class="form-control" id="amount" name="amount" value="{{$entry->amount ?? ''}}" />
    </div>
    <div class="form-group">
        <label for="description">Descrição</label>
        <input class="form-control" id="description" name="description" value="{{$entry->description ?? ''}}" />
    </div>
@endsection

