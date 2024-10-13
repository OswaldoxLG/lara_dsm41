@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>UPDATE USER</h3>

        <form action="{{route('user.update.data')}}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$usuario->id}}">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" value="{{$usuario->nombre}}" id="">
            </div>
            <div>
                <input type="submit" value="Editar">
            </div>
        </form>
    </div>
@endsection