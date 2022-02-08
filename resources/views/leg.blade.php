<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('homepage') }}">Torna alla homepage</a>
    <h1>la gamba</h1>
    <div>
        @forelse($cast as $actor)
        
            @if ($loop->last) 
                <ul>
                    <li>{{ $actor }}</li>
                </ul> 
            @endif

        @empty
            <p>!!controllare elementi array</p>
        @endforelse
    </div>
</body>
</html>