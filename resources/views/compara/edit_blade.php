<form method="POST" action="/compara/{{ $compara->id }}">
    @csrf
    @method('PUT')
    <input type="text" name="title" value="{{ $compara->prueba }}">
    <button type="submit">Actualizar Prueba</button>
</form>