@extends('layouts.admin')

@section('content')
<div class="container">
    <a href="{{url('admin/features')}}">Back to Features</a>
    <h1>Edit Feature</h1>


    <form method="POST" action="{{action('FeaturesController@update',[$feature->id])}}" enctype="multipart/form-data">
        @method('PUT')
        @csrf

        <div class="form-group">
            <input class="form-control" name="title" type="text" placeholder="title" value="{{$feature->title}}">
        </div>

        <div class="form-group">
            <textarea class="form-control" name="body" placeholder="body">{{$feature->body}}</textarea>
        </div>

        <div class="form-group">
                <img class="img-fluid" src="{{asset('storage/images')}}/{{$feature->image}}">

                <input class="form-control" name="image" type="file" placeholder="image">
            </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>

    </form>
</div>
@endsection
