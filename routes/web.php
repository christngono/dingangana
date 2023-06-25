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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\dinganganaController::class, 'accueil'])->name('accueil');
Route::get('/apropos', [App\Http\Controllers\dinganganaController::class, 'about'])->name('about');
Route::get('/film', [App\Http\Controllers\dinganganaController::class, 'showmedia'])->name('show');
Route::get('/film/presentation/{id}/{typecontent}', [App\Http\Controllers\dinganganaController::class, 'showvideo'])->name('showvideo');
Route::get('/film/audio/play', [App\Http\Controllers\dinganganaController::class, 'showaudio'])->name('showaudio');
Route::get('/film/listaudio', [App\Http\Controllers\dinganganaController::class, 'displayaudio'])->name('displayaudio');
//Route::get('/film/audio/{id}', [App\Http\Controllers\dinganganaController::class, 'showaudio'])->name('showaudio');
Route::get('/film/move/{id}/{typecontent}', [App\Http\Controllers\dinganganaController::class, 'display'])->name('media.show');
Route::get('/history', [App\Http\Controllers\dinganganaController::class, 'history'])->name('history');

//section adminstration
//Route::prefix('admin')->name('admin')->group(function(){
//php artisan make:controller Admin\\PostController
//})
Route::get('/admin/new', [App\Http\Controllers\dinganganaController::class, 'create'])->name('create');
Route::post('/admin/new', [App\Http\Controllers\dinganganaController::class, 'store'])->name('create.store')->middleware('auth');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');