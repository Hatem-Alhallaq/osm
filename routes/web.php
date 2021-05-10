<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\UserController;
use App\Models\Post;
use App\Models\Category;
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

//Auth::routes();

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
    Route::get('posts/competitiones', [App\Http\Controllers\PostController::class, 'competitiones_index'])->name('competitiones');
    Route::get('posts/competition', [App\Http\Controllers\PostController::class, 'create_competition'])->name('posts_competition');
    Route::post('post/competition', [App\Http\Controllers\PostController::class, 'store_competition'])->name('posts_competition_s');
    Route::get('/posts/delete/{id}', [App\Http\Controllers\PostController::class, 'destroy'])->name('posts.delete');
    Route::get('posts/v', [App\Http\Controllers\PostController::class, 'create_v'])->name('posts_v');
    Route::post('post/v', [App\Http\Controllers\PostController::class, 'store_v'])->name('posts_v_s');
    Route::get('posts/op', [App\Http\Controllers\PostController::class, 'create_op'])->name('posts_op');
    Route::post('posts/op', [App\Http\Controllers\PostController::class, 'store_op'])->name('posts_op_s');
    Route::get('posts/ph', [App\Http\Controllers\PostController::class, 'create_ph'])->name('posts_ph');
    Route::post('posts/ph', [App\Http\Controllers\PostController::class, 'store_ph'])->name('posts_ph_s');
    Route::resource('posts', PostController::class);
    Route::get('/posts/{id}/edit', [App\Http\Controllers\PostController::class, 'edit'])->name('posts.edit');
    Route::get('/posts/{id}/show', [App\Http\Controllers\PostController::class, 'show'])->name('competitionsingle');
    Route::post('/posts/{id}/edit', [App\Http\Controllers\PostController::class, 'update'])->name('posts.update');
    Route::resource('categories', CategoryController::class);
    Route::get('/categories/delete/{id}', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('categories.delete');
    Route::get('/categories/{id}/show', [App\Http\Controllers\CategoryController::class, 'show'])->name('cat_video');
    Route::resource('images', ImageController::class);
    Route::resource('users', UserController::class);
    Route::get('/users/{id}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
    Route::post('/users/{id}/edit', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');
    Route::get('/users/delete/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.delete');

    Route::get('/cp/categories', function () {
        return view('/cp/categories');
    });


    Route::get('/cp/addcategory', function () {
        return view('/cp/newcategory');
    });

});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
   // return view('dashboard');
})->name('dashboard');
