<?php

use Illuminate\Support\Facades\Route;
use App\Models\Todo_list;
use App\Http\Controllers\TodoListController;

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
});

// // Without Controller using just routing
// Route::get('/todos', function() {
//     $todos = Todo_list::all();
//     return view('todos')->with('todo_arr', $todos);
//     // foreach($todos as $todo) {
//     //     echo 'todo : ' . $todo . "<br>";
//     // }
// });

// Route::get('/create', function () {
//     $todo = new Todo_list();
//     $todo->name = 'new todo';
//     $todo->save();
// });

// Route::get('/delete/{id}', function ($id) {
//     return Todo_list::find($id)->delete();
// });

// Route::get('/update/{id}', function($id) {
//     // method 1 
//     // Todo_list::find($id)->update(['name' => 'updated todo']);

//     // method 2
//     $todo = Todo_list::find($id);
//     $todo->name = 'updateddddd todo';
//     $todo->save();
// });


//  With Controller
Route::get('/todos', [TodoListController::class, 'index']);

Route::get('/create', [TodoListController::class, 'create']);

Route::get('/save_new_todo', [TodoListController::class, 'store']);

Route::get('/delete/{id}', [TodoListController::class, 'destroy']);

Route::get('/edit/{id}', [TodoListController::class, 'edit']);

Route::get('/update_todo/{id}', [TodoListController::class, 'update']);