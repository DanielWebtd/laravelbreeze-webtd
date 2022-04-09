<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QueryBuilderController;

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

Route::get('/dashboard', function () {

    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::get('filtros', [QueryBuilderController::class, 'filtros'])->name('query.builder.filtros');
Route::get('pruebas', [QueryBuilderController::class, 'pruebas'])->name('query.builder');
