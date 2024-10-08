<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Posts</title>
</head>
<body>
    <h1>Listado de Posts</h1>
    <ul id="posts"></ul>

    <script>
        fetch('/api/posts')
            .then(response => response.json())
            .then(data => {
                const postsList = document.getElementById('posts');
                data.forEach(post => {
                    const listItem = document.createElement('li');
                    listItem.textContent = post.title;
                    postsList.appendChild(listItem);
                });
            });
    </script>
</body>
</html>
