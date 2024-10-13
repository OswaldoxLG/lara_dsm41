@extends('layouts.app')

@section('content')

<form action="">
    <label for="">Correo Electronico</label>
    <input type="email" name="email">
    <label for="password">Contraseña</label>
    <input type="password" name="password">
    <button type="submit">Iniciar Sesion</button>
    
</form>
@endsection