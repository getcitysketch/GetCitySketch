@extends('layouts.admin')

@section('content')
<div class="container">
    <a href="{{url('admin/features')}}">Back to Features</a>
    <h1>{{$feature->title}}</h1>
    <small>Created: <b>{{$feature->created_at}}</b></small>
    <small>Last Updated: <b>{{$feature->updated_at}}</b></small>
    <hr>
    <div>
        {{$feature->body}}
    </div>
    <div>
        <img class="img-fluid" src="{{asset('storage/images')}}/{{$feature->image}}">
    </div>
    <hr>

    <form action="{{action('FeaturesController@destroy', [$feature->id])}}" method="post">
        @method('DELETE')
        @csrf

        <a class="btn btn-primary" href="{{$feature->id}}/edit">edit</a>


        <button class="btn btn-danger" type="submit">delete</button>
    </form>
</div>
@endsection