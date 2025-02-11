<?php

use App\Http\Controllers\AccionController;
use App\Http\Controllers\AdminsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ComediaController;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RomanceController;
use App\Http\Controllers\TerrorController;
use App\Http\Controllers\ViewsController;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LanguageController;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/user/{id}', [LanguageController::class, 'swap'])->name('lang.swap');

Route::get('/', function () {
    return view('movies.index');
});

Route::get('cineopinion/{id}',function ($id) {
    $pelicula=$id;
    return view('movies.pelicula',compact('pelicula'));
});
Route::get('cineopinion/cineopinion/{id}',function ($id) {
    $pelicula=$id;
    return view('movies.pelicula',compact('pelicula'));
});




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function (){
    Route::resource('cineopinion', ViewsController::class);
    Route::resource('administrador',AdminsController::class);
    Route::resource('category', CategoryController::class);
});


Route::middleware('auth')->group(function (){
    Route::resource('accion', AccionController::class);
    Route::resource('terror', TerrorController::class);
    Route::resource('comedia', ComediaController::class);
    Route::resource('romance',RomanceController::class);
});





 /* Route::get('category/{id}', function($id){
    $categoria=$id;
    return view('movies.categorias',compact('categoria'));
}); */


require __DIR__.'/auth.php';
