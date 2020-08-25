@extends('layouts.admin')

@section('content')

<div class="container">
    <h1>Edit Variable</h1>

    <form method="POST" action="{{action('VariablesController@update',[$variable->id])}}">
        @method('PUT')
        @csrf

        <div class="form-group">
            <label for="variableValue">{{$variable->name}}</label>
            <input id="variableValue" class="form-control" name="value" type="text" placeholder="value" value="{{$variable->value}}">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>

    </form>
</div>
@endsection
