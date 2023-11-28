<?php

use App\Models\Task;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [TaskController::class, 'index'])->name('tasks.index');
Route::get('/task/create', [TaskController::class, 'create'])->name('create.task');
Route::post('/task/create', [TaskController::class, 'store'])->name('store.task');
Route::get('/task/{id}', [TaskController::class, 'show'])->name('show.task');
Route::get('/task/{id}/edit', [TaskController::class, 'edit'])->name('edit.task');
Route::put('/task/create', [TaskController::class, 'update'])->name('update.task');
Route::delete('/task/{id}/delete', [TaskController::class, 'delete'])->name('delete.task');
Route::put('/task/{id}/toogle-complete', [TaskController::class, 'toogleComplete'])->name('task.toogle-complete');