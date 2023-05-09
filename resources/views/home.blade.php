<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    @vite('resources/js/app.js')
</head>

<body>
    <div class="container">
        <h1>Trains</h1>
        <ul>
            @foreach ($trains as $train)
            <li>{{$train->train_code}} - {{$train->departure_time}} - {{$train->arrival_time}}</li>
            @endforeach
        </ul>
    </div>
</body>

</html>