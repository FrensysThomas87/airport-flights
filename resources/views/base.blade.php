<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <h1>VOLA VERSO NUOVE AVVENTURE</h1>
    </header>

    <main>
        @yield('content')
    </main>


    <footer><h3>&copy Copyright 2021</h3></footer>
</body>
</html>
