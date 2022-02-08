<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Tre uomini e una gamba</h1>
    <h2>Un film del {{ $year }} diretto da {{ $direction }}</h2>
    <a href="{{ route('actors') }}">I tre Uomini</a>
    <br>
    <a href="{{ route('leg') }}">La gamba</a>
</body>
</html>