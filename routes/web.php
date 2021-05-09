<?php

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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['web'], 'prefix' => 'cp'], function () {

    Route::get('/', function () {
        return view('cp/home');
    })->name('home');

    Route::get('chat', function () {
        return view('/cp/chat');
    })->name('chat');

    Route::get('/cp/videos', function () {
        return view('/cp/videos');
    });

    Route::get('/cp/post', function () {
        return view('/cp/newpost');
    });

    Route::get('/cp/users', function () {
        return view('/cp/users');
    });

    Route::get('/cp/categories', function () {
        return view('/cp/categories');
    });


    Route::get('/cp/addcategory', function () {
        return view('/cp/newcategory');
    });

});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
