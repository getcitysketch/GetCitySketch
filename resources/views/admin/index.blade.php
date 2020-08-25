@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-dark text-white">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card ">
                <div class="card-header bg-dark text-white">Posts</div>

                <div class="card-body">
                    <a href="{{ url('admin/posts') }}">
                        View Posts
                    </a>
                    <br>
                    <a href="{{ url('admin/posts/create') }}">
                        Create Post
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-dark text-white">Features</div>

                <div class="card-body">
                    <a href="{{ url('admin/features') }}">
                        View Features
                    </a>
                    <br>
                    <a href="{{ url('admin/features/create') }}">
                        Add Feature
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-white">Schlüsselwerte</div>

                <div class="card-body">
                    @if (count($variables) > 0)
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Wert</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($variables as $variable)
                            <tr>
                                    <td><a href="admin/variables/{{$variable->id}}">{{$variable->name}}</a></td>
                                    <td>{{$variable->value}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

</div>
@endsection
