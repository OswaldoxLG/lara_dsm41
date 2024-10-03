<!DOCTYPE html>
<html>
<head>
    <title>Crear Post</title>
</head>
<body>
    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif
    @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form action="{{ route('post.store') }}" method="POST">
        @csrf
        <label for="title">Título:</label>
        <input type="text" name="title" id="title" required>

        <label for="body">Cuerpo:</label>
        <textarea name="body" id="body" required></textarea>

        <button type="submit">Crear Post</button>
    </form>
</body>
</html>