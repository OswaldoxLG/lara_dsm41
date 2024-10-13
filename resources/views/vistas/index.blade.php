<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prueba</title>
</head>
<body>
    <ul>
        @foreach($user  as $us)
        <li>{{ $us->nombre }} - {{$us->email}} - {{ $us->id}} -- {{$us->created_at}}</li>
        @endforeach  
    </ul>
</body>
</html>