<?php
use App\Models\Post; // Importar el modelo Post
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Ruta para la página principal, que mostrará la lista de posts
Route::get('/', function () {
    $posts = Post::all(); // Obtener todos los posts
    return view('posts.index', compact('posts')); // Mostrar los posts en la página principal
});

// Ruta para listar todos los posts
Route::get('/posts', function () {
    $posts = Post::all(); // Obtener todos los posts
    return view('posts.index', compact('posts')); // Pasar los posts a la vista
});

// Ruta para mostrar el formulario de edición de un post
Route::get('/posts/{post}/edit', function (Post $post) {
    return view('posts.edit', compact('post'));
});

Route::put('/posts/{post}', function (Request $request, $id) {
    $post = Post::findOrFail($id); 
    $post->update($request->all());
    return redirect('/posts');
});

// Ruta para eliminar un post
Route::delete('/posts/{post}', function (Post $post) {
    $post->delete();
    return redirect('/posts');
});


Route::get('/favicon.ico', function() {
    return response()->noContent();
});
