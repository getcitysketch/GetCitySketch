@extends('layouts.layout')

@section('content')
<div>
    <a href="{{url('/')}}">Back to HomePage</a>
    <h1>{{$post->title}}</h1>
    <div>
        {{$post->body}}
    </div>
    <img src="{{asset('storage/images')}}/{{$post->image}}">
</div>
@endsection