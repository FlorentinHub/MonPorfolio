<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\AccueilController;

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

Route::get('/', [AccueilController::class, 'index'])->name('accueil');

Route::get('/ajouter-projet', function(){
    return view('ajoutProjet');
});
// Route::get('/', [ProjetController::class, 'index']);
Route::post('/projet', [ProjetController::class, 'store']);


Route::get('/projet/{id}', [ProjetController::class, 'details'])->name('projet.details');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//MODIFIER
Route::get('/projet/{id}/edit', [ProjetController::class, 'edit'])->name('projet.edit');
Route::put('/projet/{id}', [ProjetController::class, 'update'])->name('projet.update');
//SUPPRIMER
Route::get('/projet/{id}/confirm-delete', [ProjetController::class, 'confirmDelete'])->name('projet.confirmDelete');
//DESTROY
Route::delete('/projet/{id}', [ProjetController::class, 'destroy'])->name('projet.destroy');





