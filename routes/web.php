<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Eleveur\EleveurController;
use App\Http\Controllers\MoutonController;
use App\Models\User;
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

Route::get('/storage/{filename}', function ($filename) {
    $path = storage_path('app/public/' . $filename);

    if (!file_exists($path)) {
        abort(404);
    }

    return response()->file($path);
})->where('filename', '.*');


Route::prefix('admin')->name('admin.')->middleware(['auth', 'profil:Administrateur'])->group(function () {
    Route::resource('administrateur', AdminController::class)->except('destroy');
    Route::get('eleveur/{id}/delete', [AdminController::class, 'destroy'])->name('administrateur.delete');
    Route::get('administrateur/{id}/bloquer',[AdminController::class, 'bloquer'])->name('administrateur.bloquer');
    Route::get('administrateur/{id}/debloquer',[AdminController::class, 'debloquer'])->name('administrateur.debloquer');
});

Route::prefix('eleveur')->name('eleveur.')->middleware(['auth', 'profil:Eleveur,Administrateur'])->group(function (){
    Route::resource('mouton', EleveurController::class);
    Route::get('mouton/{id}/delete', [AdminController::class, 'destroy'])->name('mouton.delete');

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified',])->group(function () {
    Route::get('accueil/', [AdminController::class, 'index'])->name('accueil');
});

    Route::get('/', [MoutonController::class, 'index'])->name('index');
    Route::get('details/{mouton}', [MoutonController::class, 'show'])->name('detail.mouton');
    Route::get('contact/{mouton}', [MoutonController::class, 'contact'])->name('client.contact');
    Route::post('inscription', [MoutonController::class, 'inscrire'])->name('eleveur.inscription');





