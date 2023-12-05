<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\RecipeController;
use App\Models\Recipe;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/article', [ArticleController::class, 'index'])->name('article');
Route::get('/article/{id}', [ArticleController::class, 'detail']);
Route::get('/edit-article/{id}', [ArticleController::class, 'edit']);
Route::put('/article/{id}', [ArticleController::class, 'update']);
Route::get('/add-article', [ArticleController::class, 'new']);
Route::post('/article', [ArticleController::class, 'store']);
Route::get('/delete-article/{id}', [ArticleController::class, 'delete']);
Route::delete('/article/{id}', [ArticleController::class, 'destroy']);

Route::get('/review', [ReviewController::class, 'index'])->name('review');

Route::get('/recipe', [RecipeController::class, 'index'])->name('recipe');
Route::get('/recipe/{id}', [RecipeController::class, 'detail']);
Route::get('/edit-recipe/{id}', [RecipeController::class, 'edit']);
Route::put('/recipe/{id}', [RecipeController::class, 'update']);
Route::get('/add-recipe', [RecipeController::class, 'new']);
Route::post('/recipe', [RecipeController::class, 'store']);
Route::get('/delete-recipe/{id}', [RecipeController::class, 'delete']);
Route::delete('/recipe/{id}', [RecipeController::class, 'destroy']);
