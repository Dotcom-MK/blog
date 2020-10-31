<?php
use App\Http\Controllers\TodoController;

Route::get('/todos', [TodoController::class, 'index']);

// get route
Route::get('/todos/create', [TodoController::class, 'create']);

Route::post('/todos/create', [TodoController::class, 'store']);

Route::get('/todos/edit', [TodoController::class, 'edit']);

Route::get('/', function () {
    return view('welcome');
});




