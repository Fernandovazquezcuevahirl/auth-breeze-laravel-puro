<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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

Route::get('/', [UserController::class,'register']);
Route::get('/datos', [UserController::class,'ObtenerDatos']);


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::resource('post', PostController::class)->middleware(['auth', 'verified']);
// Route::resource('category', CategoryController::class);
 


    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    Route::get('/adminrequire', function () {
        return view('adminrequire');
    })->name('adminrequire');

    Route::resource('post', PostController::class)->middleware(['auth', 'admin']);
    Route::resource('category', CategoryController::class)->middleware(['auth', 'admin']);


require __DIR__.'/auth.php';
