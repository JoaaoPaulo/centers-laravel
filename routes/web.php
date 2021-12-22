<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');

    //return 'Minha Primeira Rota';
    //return '<h1> Ola Mundo!</h1>';
});

Route::get('/contato', function() {

    return view('contato');
});

Route::get('/quemsomos', function() {

    return view('quemsomos');
});


Route::get('/produtos-view', 'App\Http\Controllers\ProdutosController@exibirProdutos');

Route::post('produtos/inserir', 'App\Http\Controllers\ProdutosController@store');

Route::get('/produtos-view/{id}', 'App\Http\Controllers\ProdutosController@destroy');

Route::get('/generos-view', 'App\Http\Controllers\GeneroController@exibirGeneros');

Route::post('genero/inserir', 'App\Http\Controllers\GeneroController@store');

Route::get('/generos-view/{id}', 'App\Http\Controllers\GeneroController@destroy');

Route::get('/genero-editar/{id}/editar', 'App\Http\Controllers\GeneroController@edit');

Route::post('/genero-alterar/{id}', 'App\Http\Controllers\GeneroController@update');