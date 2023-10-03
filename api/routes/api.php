<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\StaticTranslationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group(['prefix' => 'blog'], function (){
    Route::get('/posts', [BlogController::class, 'posts']);
    Route::get('/post/{id}', [BlogController::class, 'show']);
    Route::get('/last-posts', [BlogController::class, 'lastPosts']);
});
Route::group(['prefix' => 'comments'], function (){
    Route::get('/all', [CommentsController::class, 'getAllComments']);
});

Route::get('/slider', [SliderController::class, 'index']);





Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/request',[RequestController::class, 'request'] )->name('request');
Route::get('/static-translation/{locale}',[StaticTranslationController::class, 'index'] )->name('static-translation');



