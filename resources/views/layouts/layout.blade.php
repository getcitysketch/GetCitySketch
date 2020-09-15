<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env("APP_NAME")}}</title>
</head>
<body>
    <header>
        <img class="logo" src="images/CSK_Logo.jpg" alt="CitySketch">
        <nav>
            <ul class="nav_links">
                <li><a href="{{url('/')}}">Home</a></li>
                <li><a href="{{url('diplomarbeit')}}">Diplomarbeit</a></li>
                <li><a href="{{url('features')}}">Features</a></li>
                <li><a href="{{url('gallery')}}">Gallerie</a></li>
            </ul>
        </nav>
        <a class="cta" href="#"><button>Contact</button></a>
    </header>
    @yield('content')


    <footer>
        <div>Footer</div>
    </footer>
</body>
</html>