<h1>Lista de prueba</h1>
@foreach ($compara as $value)
    <h2>{{ $value->prueba }}<h2>
@endforeach

<form method="POST" action="/compara/{{ $compara->id }}">
    @csrf
    @