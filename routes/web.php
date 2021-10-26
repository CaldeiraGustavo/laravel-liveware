<?php

use App\Http\Livewire\{
    ShowTweets
};
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('tweets', ShowTweets::class);