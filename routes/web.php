<?php

use App\Http\Livewire\{
    ShowTweets
};
use App\Http\Livewire\User\UploadPhoto;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tweets', ShowTweets::class)
            ->middleware('auth')
            ->name('upload.photo.user');
Route::get('/upload', UploadPhoto::class)
            ->middleware('auth')
            ->name('tweets.index');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
