<?php

use App\Http\Controllers\BienController;
use App\Http\Controllers\CommuneController;
use App\Http\Controllers\EtatController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuatierController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\VilleController;
use App\Http\Controllers\VisiteurController;
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

Route::get('/a', function () {
    // $menu = 'personnel';
    // return view('welcome',compact('menu'));
    return view('admin.errors.file');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('hoome');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/bien', [HomeController::class, 'bien'])->name('bien');
Route::get('/detail', [HomeController::class, 'detail'])->name('detail');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/gestion_du_personnel', [HomeController::class, 'home_presonnel'])->name('personnel.home')->middleware('auth');

Route::resource('roles', RoleController::class);
Route::resource('biens', BienController::class);
Route::resource('communes', CommuneController::class);
Route::resource('etats', EtatController::class);
Route::resource('sliders', SliderController::class);
Route::resource('villes', VilleController::class);
Route::resource('visiteurs', VisiteurController::class);
Route::resource('quatiers', QuatierController::class);
Route::get('/errors',[HomeController::class, 'erreur'])->name('erreur');





