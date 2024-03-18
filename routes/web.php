<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

//L'obbiettivo é la creazione del controller CRUD per l'entità corso

Route::get('/classes/index', [\App\Http\Controllers\ClassesController::class, 'index'])
    ->name('classes.index');
Route::get('/classes/create', [\App\Http\Controllers\ClassesController::class, 'create'])
    ->name('classes.create');
Route::post('/classes/create', [\App\Http\Controllers\ClassesController::class, 'store'])
    ->name('classes.store');
Route::get('/classes/{class?}', [\App\Http\Controllers\ClassesController::class, 'show'])
    ->name('classes.show');
Route::match(['PUT', 'PATCH'], '/class/{class}/edit', [\App\Http\Controllers\ClassesController::class, 'update'])
    ->name('classes.update');
Route::delete('/class/{class}', [\App\Http\Controllers\ClassesController::class, 'destroy'])
    ->name('classes.destroy');
