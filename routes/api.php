<?php
use Illuminate\Support\Facades\Route;
use App\Models\Post;

Route::get('/posts', function () {
    return Post::all(); // Devuelve todos los posts en formato JSON
});

Route::put('/posts/{post}', function (Request $request, Post $post) {
    $post->update($request->all());
    return response()->json(['message' => 'Post actualizado']);
});

Route::delete('/posts/{post}', function (Post $post) {
    $post->delete();
    return response()->json(['message' => 'Post eliminado']);
});
