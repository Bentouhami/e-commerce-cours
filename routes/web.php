<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


/**
 * M V C
 * --------
 * M - Model
 * V - View
 * C - Controller
 * ----------------
 */

/**
 * Route for home page
 */

Route::get('/home', HomeController::class);
Route::get('contact', [ContactController::class, 'index']);

Route::get('about', [AboutController::class, 'index'])->named('about');




/**
 * grouping routes
 */

/*Route::group(['prefix'=> 'customer'], function(){
    Route::get('/', function() {
        return "<h1>Customer List</h1>";
    });
    Route::get('/create', function() {
        return "<h1>Customer create</h1>";
    });
    Route::get('/show', function() {
        return "<h1>Customer show</h1>";
    });
});*/

//Route methods
/**
 * GET - Request a resource
 * POST - Create a new resource
 * PUT - Update a resource
 * PATCH - Modifie a resource
 * DELETE - Delete a resource
 */

/** fallback Route
 * the default redirection of laravel if a route dose not exists.
 */
/*Route::fallback(function(){
    return 'Route Not exists';
});*/

Route::resource('blog',
    \App\Http\Controllers\BlogController::class);


require __DIR__ . '/auth.php';
