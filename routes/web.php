<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ViewController;
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


Route::get("/",[ArticleController::class,"index"])->name("articles");
Route::get("/article/{article}/show",[ArticleController::class,"show"])->name("article");
Route::get("/article/create",[ArticleController::class,"create"])->name("article.create");
Route::post("/article/store",[ArticleController::class,"store"])->name("article.store");
Route::get("/article/{article}/edit",[ArticleController::class,"edit"])->name("article.edit");
Route::patch("/article/{article}/update",[ArticleController::class,"update"])->name("article.update");

Route::get("/views",[ViewController::class,"index"])->name("views");

