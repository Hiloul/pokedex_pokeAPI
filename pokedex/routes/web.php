<?php
use App\Http\Controllers\PokedexController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});



Route::get(	'/pokemons',[PokedexController::class,'index'])->name('pokedex.index') ;
Route::get('/pokemons/create',[PokedexController::class,'create'])->name('pokedex.create') ;
Route::post('/pokemons',[PokedexController::class,'store'])->name('pokedex.store') ;
Route::get('/pokemons/{pokemon}',[PokedexController::class,'show'])->name('pokedex.show') ;
Route::get('/pokemons/{pokemon}/edit',[PokedexController::class,'edit'])->name('pokedex.edit');
Route::put('/pokemons/{pokemon}',[PokedexController::class,'update'])->name('pokedex.update');
Route::delete('/pokemons/{pokemon}',[PokedexController::class,'destroy'])->name('pokedex.destroy');


