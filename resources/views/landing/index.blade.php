@extends('layouts.layout')

@section('content')

<h1>Landing Page</h1>


    @if (count($posts) > 0)
        <ul>
            @foreach ($posts as $post)
            <li>
                <div>
                    <h5><a href="{{url('posts')}}/{{$post->id}}">{{$post->title}}</a></h5>
                    <p>{{$post->body}}</p>
                    <img width="300" height="200" src="{{asset('storage/images')}}/{{$post->image}}">
                </div>
            </li>
            @endforeach
        </ul>
    @endif
@endsection
