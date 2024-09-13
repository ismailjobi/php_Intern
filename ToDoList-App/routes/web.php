<?php
use App\Http\Controllers\ToDoController;
use Illuminate\Support\Facades\Route;

//Landing page route
Route::get('/', [ToDoController::class,'Index'])->name("todo.home");
// Route to access the create page
Route::get('/create', function () {
    return view('create');
})->name("todo.create");
// Route to access update page
Route::get('/update/{id}', [ToDoController::class,'Update'])->name("todo.update");

//Route to create the ToDo 
Route::post('/',[ToDoController::class,'Add'] )->name("todo.add");
//Route to Delete the ToDo 
Route::get('/delete/{id}',[ToDoController::class,'Delete'] )->name("todo.delete");
//Route to Update the ToDo 
Route::post('/update/{id}',[ToDoController::class,'UpdateData'] )->name("todo.update");


