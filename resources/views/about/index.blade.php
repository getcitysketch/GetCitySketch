@extends('layouts.layout')

@section('content')

<h1>About Page</h1>


    @if (count($features) > 0)
        <ul>
            @foreach ($features as $feature)
            <li>
                <div class="card">
                    <h5>{{$feature->title}}</h5>
                    <p>{{$feature->body}}</p>
                    <img width="300" height="200" src="{{asset('storage/images')}}/{{$feature->image}}">
                </div>
            </li>
            @endforeach
        </ul>
    @endif
@endsection
