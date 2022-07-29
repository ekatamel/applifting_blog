<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\React\ReactAppController;

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

Route::get('/articles', function () {
    return view('index');
});

Route::get('/articles/{path?}', [
  ReactAppController::class, 'renderApp'
])->where('path', '.*');