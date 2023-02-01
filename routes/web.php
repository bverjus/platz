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

// ROUTES 

Route::resource('ressources', \App\Http\Controllers\RessourcesController::class)
    ->except('show');

Route::get('/', [\App\Http\Controllers\RessourcesController::class, 'index'])->name('home');

Route::get('/ressources/{id}', [\App\Http\Controllers\RessourcesController::class, 'show'])->whereNumber('id')->name('ressources.show');

Route::get('/ajax/insert/', [\App\Http\Controllers\RessourcesController::class, 'ajaxInsert'])->name('ajax.insert');


// ROUTES AJAX 
Route::get('/ajax/older-ressources/', [\App\Http\Controllers\RessourcesController::class, 'ajaxOlders'])->name('ajax.older-ressources');
Route::get('/ajax/ai-ressources/', [\App\Http\Controllers\RessourcesController::class, 'ajaxAi'])->name('ajax.ai-ressources');
Route::get('/ajax/psd-ressources/', [\App\Http\Controllers\RessourcesController::class, 'ajaxPsd'])->name('ajax.psd-ressources');
Route::get('/ajax/theme-ressources/', [\App\Http\Controllers\RessourcesController::class, 'ajaxTheme'])->name('ajax.theme-ressources');
Route::get('/ajax/font-ressources/', [\App\Http\Controllers\RessourcesController::class, 'ajaxFont'])->name('ajax.font-ressources');
Route::get('/ajax/photo-ressources/', [\App\Http\Controllers\RessourcesController::class, 'ajaxPhoto'])->name('ajax.photo-ressources');
Route::get('/ajax/premium-ressources/', [\App\Http\Controllers\RessourcesController::class, 'ajaxPremium'])->name('ajax.premium-ressources');
