<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PessoasController;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('pessoa', 'PessoasController');
Route::get('pessoa/delete/{id}', 'PessoasController@destroy');