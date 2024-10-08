<!DOCTYPE html>
<html>
<head>
    <title>Posts</title>
</head>
<body>
    <h1>Lista de Posts</h1>

    <a href="/posts/create">Crear un nuevo post</a>

    <ul>
        @foreach($posts as $post)
            <li>
                <strong>{{ $post->title }}</strong><br>
                {{ $post->body }}<br>
                <a href="/posts/{{ $post->id }}/edit">Editar</a>

                <form action="/posts/{{ $post->id }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
