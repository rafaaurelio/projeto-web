<?php

use App\Http\Controllers\PokemonController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('pokemons', [PokemonController::class, 'index'])->name('pokemons.index');
Route::get('pokemons/create', [PokemonController::class, 'create'])->name('pokemons.create');
Route::post('pokemons', [PokemonController::class, 'store'])->name('pokemons.store');
Route::get('pokemons/{id}/edit', [PokemonController::class, 'edit'])->name('pokemons.edit');
Route::put('pokemons/{id}', [PokemonController::class, 'update'])->name('pokemons.update');
Route::delete('pokemons/{id}', [PokemonController::class, 'destroy'])->name('pokemons.destroy');