<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Post</title>
</head>
<body>
    <h1>Editar Post</h1>

    <form action="/posts/{{ $post->id }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="title">Título:</label>
            <input type="text" id="title" name="title" value="{{ $post->title }}">
        </div>

        <div>
            <label for="body">Contenido:</label>
            <textarea id="body" name="body">{{ $post->body }}</textarea>
        </div>

        <button type="submit">Actualizar Post</button>
    </form>
</body>
</html>
