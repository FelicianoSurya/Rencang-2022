<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GedurasiController;
use App\Http\Controllers\SCHController;
use App\Http\Controllers\WhoWeAreController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\RencangCTController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WhatWeDoController;
use App\Http\Controllers\SenteraController;
use App\Http\Controllers\KeakrabanController;

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

Route::get('/', [HomeController::class,'viewIndex'])->name('home');
Route::get('/gedurasi', [GedurasiController::class, 'viewIndex'])->name('gedurasi');
Route::get('/rencang-cepat-tanggap', [RencangCTController::class, 'viewIndex'])->name('rct');
Route::get('/what-we-do' , [WhatWeDoController::class, 'viewIndex'])->name('wwd');
Route::get('/event', [EventController::class, 'viewIndex'])->name('event');
Route::get('/gedurasi', [GedurasiController::class, 'viewIndex'])->name('gedurasi');
Route::get('/who-we-are', [WhoWeAreController::class, 'viewIndex'])->name('wwa');
Route::get('/sharing-caring-helping', [SCHController::class, 'viewIndex'])->name('sch');
Route::get('/sentera', [SenteraController::class, 'viewIndex'])->name('sentera');
Route::get('/keakraban', [KeakrabanController::class, 'viewIndex'])->name('keakraban');
Route::get('/soon', function () {
    return view('page.soon', ['title' => 'Coming Soon']);
})->name('soon');

Route::any(
    '{query}',
    function () {
        return redirect('/');
    }
)->where('query', '.*');





