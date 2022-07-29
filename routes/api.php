<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/articles", [
  ApiController::class, "loadArticles"
]);

Route::get("/articles/{id}", [
  ApiController::class, "showArticle"
])->whereNumber("id");

Route::get("/articles/{word}", [
  ApiController::class, "displayRelated"
])->whereAlpha("word");

Route::get("/articles/{id}/comments", [
  ApiController::class, "loadComments"
])->whereNumber("id");

Route::post("/comments", [
  ApiController::class, "storeComment"
]);

Route::post("/comments/{id}/votes", [
  ApiController::class, "changeVotes"
])->whereNumber("id");

