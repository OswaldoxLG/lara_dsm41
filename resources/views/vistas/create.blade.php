<!DOCTYPE html>
<html lang="es"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro de Usuario</title>
</head>
<body>

    <h1>BIENVENIDO</h1> 

    @if($errors->any())
        <ul>
            @foreach($errors->all() as $singleError)
                <li>{{ $singleError }}</li> 
            @endforeach
        </ul>
    @endif      

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <form action="{{ route('user.store') }}" method="post">
        @csrf
        <label for="nombre">Nombre</label> 
        <br>
        <input type="text" name="nombre" id="nombre"> 
        <br>
        <label for="email">correo</label>
        <br>
        <input type="email" name="email" id="email">
        <br>
        <label for="password">Contraseña</label>
        <br>
        <input type="password" name="password" id="password">
        <br><br>
        <input type="submit" value="ENVIO">
    </form>

</body>
</html>