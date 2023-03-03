<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TodoListController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Postman APIs

// Get all todos
Route::get('/todos', [TodoListController::class, 'index']);

// Create new todo
Route::post('/newTodo', [TodoListController::class, 'create']);

// Update a todo
Route::post('/updateTodo/{id}', [TodoListController::class, 'update']);

// Delete a todo
Route::delete('/delete/{id}', [TodoListController::class, 'destroy']);
