@extends('layouts.app')
@section('content')
    <div class="form-group">
        <label for="at">Quando <span class="required">*</span></label>
        <input type="month" class="form-control" id="at" name="at" value="{{$goal->at->format('Y-m-d')}}" />
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
        <label for="amount">Valor <span class="required">*</span></label>
        <input class="form-control" id="amount" name="amount" value="{{$goal->amount ?? ''}}" />
    </div>
@endsection

