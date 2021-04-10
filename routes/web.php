<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
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

Route::get('/books',[BookController::class,'index'])->name('books'); 
Route::get('/books/create',[BookController::class,'create'])->name('books.get.create');
Route::post('/books', [BookController::class, 'store'])->name('books.post.insert');
Route::get('/books/{id}', [BookController::class, 'show'])->name('books.get.show');
Route::get('/books/{id}/edit', [BookController::class, 'edit'])->name('book.get.edit');
Route::put('/books/{id}', [BookController::class, 'update'])->name('books.put.editar');
Route::delete('/books/{id}', [BookController::class, 'destroy'])->name('books.delete.deletar');
