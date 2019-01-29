<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



/*Routes de clientes*/


// Cadastra um cliente //

Route::post('/clientes','ClientesController@create');

// Verifica os clientes cadastrados //


Route::get('/clientes', 'ClientesController@list');

// Verifica o cliente pelo id //


Route::get('/clientes/{id}', 'ClientesController@show');

// Edita alguma informação //

Route::put('/cliente/{id}', 'ClientesController@update');

// Deleta algum cadastro //

Route::delete('/clientes/{id}', 'ClientesController@delete');



/*Routes de livros*/


// Cadastra um livro //

Route::post('/livros','LivrosController@create');

// Verifica os livros cadastrados //

Route::get('/livros', 'LivrosController@list');

// Verifica o livro pelo id //

Route::get('/livros/{id}', 'LivrosController@show');

// Edita alguma informação //

Route::put('/livros/{id}', 'LivrosController@update');

// Deleta algum cadastro //

Route::delete('/livros/{id}', 'LivrosController@delete');

