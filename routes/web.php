<?php

use App\Http\Controllers\HomeController;
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
    return view('admin.sliders.show');
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





