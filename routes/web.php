<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmsController;
use App\Http\Controllers\ActeursController;
use App\Http\Controllers\UsagersController;
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
    return view('accueil.index');
});

Route::get('accueil', [FilmsController::class, 'index'])->name ('accueil.index');

Route::get('/acceuil/{id}/detailfilm/', [FilmsController::class, 'detailfilm'])->name ('detailfilm.index');

Route::get('accueil/ajoutfilm/', [FilmsController::class, 'create'])->name ('ajoutfilm.index')->middleware('auth');
Route::post('accueil', [FilmsController::class, 'store'])->name ('ajoutfilm.store')->middleware('auth');

Route::get('/acceuil/{id}/modiffilm/', [FilmsController::class, 'edit'])->name ('modiffilm.index')->middleware('auth');
Route::patch('/acceuil/{id}/modiffilm/', [FilmsController::class, 'update'])->name ('modiffilm.update')->middleware('auth');

Route::delete('/accueil/{id}/supprfilm', [FilmsController::class, 'destroy'])->name ('modiffilm.destroy')->middleware('auth');


Route::get('accueil/{id}/ajoutrelation/', [FilmsController::class, 'ajoutrelation'])->name ('ajoutrelation.index')->middleware('auth');
Route::post('accueil/supprrelation/', [FilmsController::class, 'ajoutrelationStore'])->name ('ajoutrelation.store')->middleware('auth');

Route::get('/accueil/{id}/supprrelation/', [FilmsController::class, 'supprrelation'])->name ('supprrelation.index')->middleware('auth');
Route::delete('/accueil/supprrelation/', [FilmsController::class, 'destroyRelation'])->name ('supprrelation.destroy')->middleware('auth');

Route::get('acteurs', [ActeursController::class, 'index'])->name ('acteurs.index');

Route::get('/acteurs/{id}/detailacteurs/', [ActeursController::class, 'detailacteurs'])->name ('detailacteurs.index');

Route::get('acteurs/ajoutacteurs/', [ActeursController::class, 'create'])->name ('ajoutacteurs.index')->middleware('auth');
Route::post('acteurs', [ActeursController::class, 'store'])->name ('ajoutacteurs.store')->middleware('auth');

Route::get('/acteurs/{id}/modifacteurs/', [ActeursController::class, 'edit'])->name ('modifacteurs.index')->middleware('auth');
Route::patch('/acteurs/{id}/modifacteurs/', [ActeursController::class, 'update'])->name ('modifacteurs.update')->middleware('auth');

Route::delete('/acteurs/{id}', [ActeursController::class, 'destroy'])->name ('modifacteurs.destroy')->middleware('auth');


Route::get('usagers', [UsagersController::class, 'index'])->name ('usagers.index')->middleware('auth');

Route::get('usagers/ajoutusagers/', [UsagersController::class, 'create'])->name ('ajoutusagers.index')->middleware('auth');
Route::post('usagers', [UsagersController::class, 'store'])->name ('ajoutusagers.store');

Route::get('/usagers/{id}/modifusagers/', [UsagersController::class, 'edit'])->name ('modifusagers.index')->middleware('auth');
Route::patch('/usagers/{id}/modifusagers/', [UsagersController::class, 'update'])->name ('modifusagers.update')->middleware('auth');

Route::delete('/usagers/{id}', [UsagersController::class, 'destroy'])->name ('usagers.destroy')->middleware('auth');


Route::get('connexion', [UsagersController::class, 'showlogin'])->name ('connexion.index');
Route::Post('connexion', [UsagersController::class, 'login'])->name ('connexion.login');
Route::get('deconnexion', [UsagersController::class, 'logout'])->name ('connexion.logout')->middleware('auth');

