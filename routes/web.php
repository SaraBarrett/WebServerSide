<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home.welcome');

Route::get('/home', [IndexController::class, 'homePage'] )->name('homenomedarotaparachamarno<a></a>');

Route::get('/users', [UserController::class, 'allUsers'])->name('users.all');

Route::get('/user/{id}', [UserController::class, 'viewUser'])->name('users.view');
Route::get('/delete-user/{id}', [UserController::class, 'deleteUser'])->name('users.delete');

Route::get('/add-user', [UserController::class, 'addUser'])->name('users.add');

Route::post('/create-user', [UserController::class, 'createUser'])->name('users.create');


Route::get('/tasks', [TaskController::class, 'allTasks'])->name('tasks.all');

Route::get('/task/{id}', [TaskController::class, 'editTask'])->name('tasks.edit');

Route::get('/add-task', [TaskController::class, 'addTask'])->name('tasks.add');
Route::post('/create-task', [TaskController::class, 'createTask'])->name('tasks.create');


Route::get('/hello', [IndexController::class, 'helloWorld'])->name('home.hello');

Route::get('/hello/{name}', function ($name) {
    return '<h2>Olá '.$name.'</h2>';
});

//rota fallback - para onde vai caso o user coloque um url que não existe

Route::fallback(function(){
    return view('errors.fallback');
});



