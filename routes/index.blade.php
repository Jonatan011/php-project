<form action="/posts/{{ $post->id }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit">Eliminar</button>
</form>
