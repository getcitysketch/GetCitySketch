@extends('layouts.admin')

@section('content')
<div class="container">
    <a href="{{url('admin/posts')}}">Back to Posts</a>
    <h1>{{$post->title}}</h1>
    <small>Created: <b>{{$post->created_at}}</b></small>
    <small>Last Updated: <b>{{$post->updated_at}}</b></small>
    <hr>
    <div>
        {{$post->body}}
    </div>
    <div>
        <img class="img-fluid" src="{{asset('storage/images')}}/{{$post->image}}">
    </div>
    <hr>

    <form action="{{action('PostsController@destroy', [$post->id])}}" method="post">
        @method('DELETE')
        @csrf

        <a class="btn btn-primary" href="{{$post->id}}/edit">edit</a>


        <button class="btn btn-danger" type="submit">delete</button>
    </form>
</div>
@endsection