<?php

use App\Models\Post; // Esta línea es suficiente
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Ruta para mostrar todos los posts
Route::get('/posts', function () {
    $posts = Post::all(); // Obtener todos los posts
    return view('posts.index', compact('posts')); // Pasar los posts a la vista
});

// Ruta para mostrar el formulario de creación de un nuevo post
Route::get('/posts/create', function () {
    return view('posts.create');
});

// Ruta para almacenar un nuevo post
Route::post('/posts', function (Request $request) {
    Post::create($request->all());
    return redirect('/posts'); // Redirigir a la lista de posts después de crear uno
});

// Ruta para mostrar el formulario de edición de un post
Route::get('/posts/{post}/edit', function (Post $post) {
    return view('posts.edit', compact('post'));
});

// Ruta para actualizar un post existente
Route::put('/posts/{post}', function (Request $request, Post $post) {
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
