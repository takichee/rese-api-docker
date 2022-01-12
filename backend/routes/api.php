<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\LikeController;

Route::apiResource('/v1/shops', ShopController::class)->only([
    'index', 'show'
]);

Route::apiResource('/v1/users', UserController::class)->only([
    'show', 'store'
]);

Route::apiResource('/v1/reservations', ReservationController::class)->only([
    'show', 'store', 'update'
]);

Route::apiResource('/v1/likes', LikeController::class)->only([
    'show', 'store', 'destroy'
]);

