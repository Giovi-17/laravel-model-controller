<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <div class="container">

        @foreach ($movies as $movie)
            
            <div class="card">
                
                <h2><span class="bold">Title:</span> {{ $movie->title }}</h2>
                <span><span class="bold">Original Title:</span> {{ $movie->original_title }} - </span>
                <span><span class="bold">Nationality:</span> {{ $movie->nationality }} - </span>
                <span><span class="bold">Date:</span> {{ $movie->date }} - </span>
                <span><span class="bold">Vote:</span> {{ $movie->vote }}</span>

            </div>

        @endforeach

    </div>
    
</body>
</html>