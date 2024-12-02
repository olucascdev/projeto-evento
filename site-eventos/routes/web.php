<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);
Route::get('/events/create', [EventController::class, 'create']);
Route::get('/produtos', [EventController::class, 'produtos']);
Route::get('/contatos', [EventController::class, 'contatos']);
Route::get('/produtos_teste/{id?}', [EventController::class, 'produto']);
