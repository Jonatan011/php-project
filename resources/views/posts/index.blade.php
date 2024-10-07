<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Posts</title>
</head>
<body>
    <h1>Posts Disponibles</h1>

    <ul>
        <!-- Verifica si hay posts en la colección -->
        @if ($posts->count() > 0)
            @foreach ($posts as $post)
                <li>
                    <!-- Mostrar título y contenido del post -->
                    <h2>{{ $post->title }}</h2>
                    <p>{{ $post->body }}</p>

                    <!-- Botón de editar -->
                    <a href="/posts/{{ $post->id }}/edit">Editar</a>

                    <!-- Formulario para eliminar el post -->
                    <form action="/posts/{{ $post->id }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </li>
            @endforeach
        @else
            <li>No hay posts disponibles.</li>
        @endif
    </ul>
</body>
</html>
