<!DOCTYPE html>
<html lang="en">
<head>
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
    @yield('content')


    <footer>
        <div>Footer</div>
    </footer>
</body>
</html>