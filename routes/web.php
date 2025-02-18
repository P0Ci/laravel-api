<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PostController;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('api')->group(function () {
    Route::withoutMiddleware([VerifyCsrfToken::class])->group(function () {
        Route::apiResource('posts', PostController::class);
    });
});

