<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

// REGISTER:
Route::post("/register", [UserController::class, 'register']);
// LOGIN:
Route::post("/login", [UserController::class, 'login']);
// LOGOUT:
Route::post("/logout", [UserController::class, 'logout']);

Route::get("/listeArticle", [ArticleController::class, 'articlesList']);
// Route::get("/articleDetails", [ArticleController::class, 'showArticleDetails'])->middleware('auth');
Route::get("/articleDetails", [ArticleController::class, 'showArticleDetails']);

Route::put("/updateArticle", [ArticleController::class, 'updateArticle']);
Route::post("/addArticle", [ArticleController::class, 'addArticle']);