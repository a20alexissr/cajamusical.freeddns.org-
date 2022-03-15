<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();



Route::resource('/dashboard/post', App\Http\Controllers\dashboard\PostController::class);;

Route::resource('/dashboard/postCanciones', App\Http\Controllers\dashboard\cancionesAdmin::class);;

Route::resource('/dashboard/postSonidos', App\Http\Controllers\dashboard\sonidosAdmin::class);;

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('mail', [App\Http\Controllers\MailController::class, 'mailView'])->name('mailView');
Route::post('send-mail', [App\Http\Controllers\MailController::class, 'mailSend'])->name('mailSend');
