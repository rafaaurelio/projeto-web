<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pokemons</title>
</head>
<body>
    <h1>Lista de Pokemons</h1>
    <button onclick="window.location='{{ url('pokemons/create') }}'" class="btn btn-primary">Criar Pokémon</button>
@foreach($pokemons as $pokemon)
    <div>
        <h3>Nome: {{ $pokemon->nome }}</h3>
        <p>Tipo: {{ $pokemon->tipo }}</p>
        <p>Pontos de Poder: {{ $pokemon->pontos_de_poder }}</p>
        <button onclick="window.location='{{ url('pokemons/'.$pokemon->id.'/edit') }}'" class="btn btn-primary">Editar</button>
        
        <form action="{{ url('pokemons/'.$pokemon->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Deletar</button>
        </form>
    </div>
@endforeach
</body>
</html>
