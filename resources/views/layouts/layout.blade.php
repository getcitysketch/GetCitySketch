<!DOCTYPE html>
<html lang="en">
<head>
    <!--link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css"-->
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env("APP_NAME")}}</title>
</head>
<body>
    <header>
        <nav>
            <div>Navigation</div>
            <ul>
                <li><a href="{{url('/')}}">Home</a></li>
                <li><a href="{{url('diplomarbeit')}}">Diplomarbeit</a></li>
                <li><a href="{{url('features')}}">Features</a></li>
                <li><a href="{{url('gallery')}}">Gallerie</a></li>
            </ul>
        </nav>
    </header>
    <h1 class="orbitron"> CitySketch </h1>
    @yield('content')


    <footer>
        <div>Footer</div>
    </footer>
</body>
</html>