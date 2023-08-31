<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Eleveur\EleveurController;
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


Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('administrateur', AdminController::class)->except('destroy');
    Route::get('eleveur/{id}/delete', [AdminController::class, 'destroy'])->name('administrateur.delete');

});

Route::prefix('eleveur')->name('eleveur.')->group(function (){
    Route::resource('mouton', EleveurController::class);
});
