<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Api\AuthController;

Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->group(function () {
    Route::get('posts', [PostController::class, 'apiIndex']);
    Route::get('posts/{post}', [PostController::class, 'show']);
    Route::post('posts/{post}/comments', [CommentController::class, 'store']);
});