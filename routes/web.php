<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\recibo;
Route::get('/',[recibo::class, "main"]);
Route::get('/new', [recibo::class, "new"]);
Route::post('/salvar', [recibo::class, "salvar"]);
Route::delete('/deletar/{id}', [recibo::class, "delete"])->name('destroy');
Route::get('/edit/{id}', [recibo::class, "edit"])->name('edit');
