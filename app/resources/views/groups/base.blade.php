@extends('layouts.app')
@section('content')
<div class="form-group">
    <label for="description">Descrição</label>
    <input class="form-control" id="description" name="description" value="{{$group->description ?? ''}}" />
</div>
@endsection
