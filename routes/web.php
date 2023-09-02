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

//Route::get('/', function () {
    //return view('welcome');
//});


Route::prefix('admin')->name('admin.')->middleware(['auth', 'profil:Adminstrateur'])->group(function () {
    Route::resource('administrateur', AdminController::class)->except('destroy');
    Route::get('eleveur/{id}/delete', [AdminController::class, 'destroy'])->name('administrateur.delete');

});

Route::prefix('eleveur')->name('eleveur.')->middleware('auth')->group(function (){
    Route::resource('mouton', EleveurController::class);
    Route::get('mouton/{id}/delete', [AdminController::class, 'destroy'])->name('mouton.delete');

});

Route::get('/', function () {
    return view('accueil');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified',])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

});
