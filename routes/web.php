<?php

use App\Http\Controllers\Guardioes;
use App\Http\Controllers\TimeDeSucesso;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/guardioes',[Guardioes::class, 'guardioes']);
Route::post('/guardioes',[Guardioes::class, 'store' ]);
Route::get('/timedesucesso',[TimeDeSucesso::class, 'show']);
Route::delete('/guardioes/{id}',[Guardioes::class, 'destroy']);

require __DIR__.'/auth.php';
