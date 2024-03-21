<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home.welcome');

Route::get('/home', function () {
    return view('home.index');
})->name('homenomedarotaparachamarno<a></a>');

Route::get('/users', function () {
    return view('users.all_users');
})->name('users.all');

Route::get('/tasks', function () {
    return view('tasks.all_tasks');
})->name('tasks.all');


Route::get('/hello', function () {
    return view('hello');
})->name('home.hello');

Route::get('/hello/{name}', function ($name) {
    return '<h2>Olá '.$name.'</h2>';
});

//rota fallback - para onde vai caso o user coloque um url que não existe

Route::fallback(function(){
    return view('errors.fallback');
});



