<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\recibo;
Route::get('/',[recibo::class, "main"]);
Route::get('/new', [recibo::class, "new"]);
