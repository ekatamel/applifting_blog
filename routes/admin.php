<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ImageController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Used for all routes for Admin panel. Put /admin prefix automatically
|
*/

// Article routes

Route::get("/articles", [
  ArticleController::class, "display"
])->name("articles.display");

Route::get("/articles/create", [
  ArticleController::class, "create"
])->name("articles.create");

Route::get("/articles/{id}/edit", [
  ArticleController::class, "edit"
])->whereNumber("id")->name("articles.edit");

Route::post("/articles", [
  ArticleController::class, "store"
])->name("articles.store");

Route::patch("/articles/{id}", [
  ArticleController::class, "update"
])->whereNumber("id")->name("articles.update");

Route::delete("/articles/{id}", [
  ArticleController::class, "destroy"
])->whereNumber("id")->name("articles.destroy");

Route::get(
  '/images/{id}', [
    ImageController::class,'destroy'
  ])->name('image.destroy');

