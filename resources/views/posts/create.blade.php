@extends('layouts.admin')

@section('content')


<div class="container">

    <a href="{{url('admin/posts')}}">Back to Posts</a>
    <h1>Create new Post</h1>

    <form method="POST" action="{{route('posts.store')}}" enctype="multipart/form-data">

        @csrf

        <div class="form-group">
            <input class="form-control" name="title" type="text" placeholder="title">
        </div>

        <div class="form-group">
            <textarea class="form-control" name="body" placeholder="body"></textarea>
        </div>

        <div class="form-group">
            <input class="form-control" name="image" type="file" placeholder="image">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>

    </form>

</div>

@endsection
