<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\ResepController;
use App\Http\Controllers\AllresepController;
use App\Http\Controllers\Auth\RegisterController;


Route::get('/', function () {
    return view('homepage');
});

Route::get('/share', function () {
    return view('share');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// route admin
Route::group(['prefix' => 'admin',
    'middleware' => ['auth', 'isAdmin']], function () {
    Route::get('/', function () {
        return view('admin.index');
    })->name('admin');
    Route::resource('kota', KotaController::class);
    Route::resource('resep', ResepController::class);
});

Route::get('/errors', function () {
    return view('errors.403');
});

Route::post('register', [RegisterController::class,'create'])->name('register-create');