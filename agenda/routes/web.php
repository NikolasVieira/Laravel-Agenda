<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PessoasController;



Route::get('/', function () {
    return view('welcome');
});

Route::resource('pessoa', 'PessoasController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
