<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\CollaborateurController;
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
// Route::group(['middleware' => 'guestRedirect'], function () {
//     Route::get('/ajouter-collaborateur', function () {
//         redirect('/accueil');
//     });

//     Route::get('/ajouter-projet', function () {
//         // Votre logique pour la page /ajouter-projet
//     });

//     // ... autres routes ...
// });


Route::get('/', [AccueilController::class, 'index'])->name('accueil');

Route::get('/ajouter-projet', [ProjetController::class, 'index'])->name('accueil');
Route::get('/ajouter-projet', [ProjetController::class, 'create'])->name('accueil');
// Route::get('/ajouter-projet', function(){
//     return view('ajoutProjet');
// });
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

//Collaborateurs:
// Route::get('/ajouter-collaborateur', [CollaborateurController::class, 'create'])->name('ajouter-collaborateur');
Route::get('/ajouter-collaborateur', [CollaborateurController::class, 'create'])->name('ajouter-collaborateur')->middleware('checkadmin');

Route::post('/ajouter-collaborateur', [CollaborateurController::class, 'store']);







