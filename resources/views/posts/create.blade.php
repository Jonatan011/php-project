<!DOCTYPE html>
<html>
<head>
    <title>Crear Post</title>
</head>
<body>
    <h1>Crear un nuevo Post</h1>

    <form action="/posts" method="POST">
        @csrf

        <label for="title">Título:</label><br>
        <input type="text" id="title" name="title"><br>

        <label for="body">Contenido:</label><br>
        <textarea id="body" name="body"></textarea><br>

        <button type="submit">Guardar</button>
    </form>
</body>
</html>
