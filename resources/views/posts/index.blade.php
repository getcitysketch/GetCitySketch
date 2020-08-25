@extends('layouts.admin')

@section('content')
    <div class="container">

        <h1>Posts</h1>

        @if (count($posts) > 0)
        @foreach ($posts as $post)
        <div class="card mt-3" style="width: 18rem;">
            <img class="card-img-top" src="{{asset('storage/images')}}/{{$post->image}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><a href="posts/{{$post->id}}">{{$post->title}}</a></h5>
                <p class="card-text">{{$post->body}}</p>
            </div>
        </div>
        @endforeach
        @else
        <h2>No Posts found</h2>
        @endif

        <a class="btn btn-primary mt-3" href="{{url('admin/posts/create')}}">Create New Post</a>
    </div>
@endsection
