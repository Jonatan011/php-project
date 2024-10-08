<!DOCTYPE html>
<html>
<head>
    <title>Editar Post</title>
</head>
<body>
    <h1>Editar Post</h1>

    <form action="/posts/{{ $post->id }}" method="POST">
        @csrf
        @method('PUT')

        <label for="title">Título:</label><br>
        <input type="text" id="title" name="title" value="{{ $post->title }}"><br>

        <label for="body">Contenido:</label><br>
        <textarea id="body" name="body">{{ $post->body }}</textarea><br>

        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
