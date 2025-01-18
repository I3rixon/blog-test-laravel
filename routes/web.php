<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

// Route for the home page
Route::get('/', [PostController::class, 'index'])->name('home');

// Resource routes for posts
Route::resource('posts', PostController::class);

// Route to store comments for a specific post
Route::post('posts/{post}/comments', [CommentController::class, 'store'])->name('comments.store');

