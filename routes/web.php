<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\JobController;

Route::get('/', [WelcomeController::class, 'index']);
Route::resource('/jobs', JobController::class);

