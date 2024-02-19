<?php

use App\Http\Controllers\AdminsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ViewsController;
use Illuminate\Contracts\View\View;
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

/* Route::get('/', function () {
    return view('welcome');
}); */

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
Route::get('cineopinion/cineopinion/cineopinion/{id}',function ($id) {
    $pelicula=$id;
    return view('movies.pelicula',compact('pelicula'));
});
Route::get('cineopinion/cineopinion/cineopinion/cineopinion/{id}',function ($id) {
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

Route::resource('cineopinion', ViewsController::class);
Route::resource('administrador',AdminsController::class);
Route::resource('category', CategoryController::class);

require __DIR__.'/auth.php';
