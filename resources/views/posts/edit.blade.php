@extends('layouts.admin')

@section('content')

<div class="container">
    <a href="{{url('admin/posts')}}">Back to Posts</a>
    <h1>Edit Post</h1>

    <form method="POST" action="{{action('PostsController@update',[$post->id])}}" enctype="multipart/form-data">
        @method('PUT')
        @csrf

        <div class="form-group">
            <input class="form-control" name="title" type="text" placeholder="title" value="{{$post->title}}">
        </div>

        <div class="form-group">
            <textarea class="form-control" name="body" placeholder="body">{{$post->body}}</textarea>
        </div>

        <div class="form-group">
            <img class="img-fluid" src="{{asset('storage/images')}}/{{$post->image}}">

            <input class="form-control" name="image" type="file" placeholder="image">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>

    </form>
</div>
@endsection
