<!DOCTYPE html>
<html>
<head>
    <title>Editar Pokémon</title>
</head>
<body>
    <h1>Editar Pokémon</h1>

    <form action="{{ route('pokemons.update', $pokemon->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Nome:</label>
        <input type="text" name="nome" value="{{ $pokemon->nome }}" required><br>

        <label>Tipo:</label>
        <input type="text" name="tipo" value="{{ $pokemon->tipo }}" required><br>

        <label>Pontos de Poder:</label>
        <input type="number" name="pontos_de_poder" value="{{ $pokemon->pontos_de_poder }}" required><br>
    <br>
        <button type="submit">Atualizar</button>
    </form>
    <button onclick="window.location='{{ route(('pokemons.index')) }}'" class="btn btn-primary">Voltar para a Lista</button>
</body>
</html>