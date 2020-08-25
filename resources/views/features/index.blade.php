@extends('layouts.admin')

@section('content')
    <div class="container">

        <h1>Features</h1>

        @if (count($features) > 0)
        @foreach ($features as $feature)
        <div class="card mt-3" style="width: 18rem;">
            <img class="card-img-top" src="{{asset('storage/images')}}/{{$feature->image}}">
            <div class="card-body">
                <h5 class="card-title"><a href="features/{{$feature->id}}">{{$feature->title}}</a></h5>
                <p class="card-text">{{$feature->body}}</p>
            </div>
        </div>
        @endforeach
        @else
        <h2>No Features found</h2>
        @endif

        <a class="btn btn-primary mt-3" href="{{url('admin/features/create')}}">Create New Feature</a>
    </div>
@endsection
