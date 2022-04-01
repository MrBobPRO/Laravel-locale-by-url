<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h3>----><a href="{{ route('home', ['locale' => 'en']) }}"> Set locale english!</a></h3>
        <h3>----><a href="{{ route('home', ['locale' => 'ru']) }}"> Set locale russian!</a></h3>
    </div>

    <h1><br>{{ __('Welcome') }}!</h1>
    <h2>Current app locale : {{ app()->getLocale() }}<br><br></h2>

    <h2><a href="{{ route('about')}}">Visit about page</a></h2>
    <h2><a href="{{ route('contacts')}}">Visit contacts page</a></h2>
</body>
</html>