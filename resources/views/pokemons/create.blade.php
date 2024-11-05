<form action="{{ url('pokemons') }}" method="POST">
    @csrf
    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome" required>

    <label for="tipo">Tipo:</label>
    <input type="text" name="tipo" id="tipo">

    <label for="pontos_de_poder">Pontos de Poder:</label>
    <input type="number" name="pontos_de_poder" id="pontos_de_poder">

    <button type="submit">Salvar</button>
</form>