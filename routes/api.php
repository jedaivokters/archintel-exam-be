<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

// User Routes
Route::apiResource('users', UserController::class);

// Company Routes
Route::apiResource('companies', CompanyController::class);

// Article Routes
Route::apiResource('articles', ArticleController::class);
