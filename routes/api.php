<?php

use App\Http\Controllers\Api\V1\NotificationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// Route::prefix('v1')->middleware(['throttle:myApi'])->group(function () {
//     Route::post('register', [AuthController::class, 'register']);
//     Route::post('login', [AuthController::class, 'login']);

// });

// Route::post('notification', OrderController::class);

// Route::prefix('v1')->middleware(['throttle:myApi', 'auth:sanctum'])->group(function () {
//     Route::apiResource('orders', OrderController::class);
//     // Route::apiResource('posts', PostController::class);
//     // Route::get('logout', [AuthController::class, 'logout']);

// });
Route::post('/notification', [NotificationController::class, 'index'])->middleware('checkIp');

// Route::prefix('v1')->middleware(['throttle:myApi', 'auth:sanctum'])->group(function () {
    // Route::apiResource('posts', PostController::class);
    // Route::get('logout', [AuthController::class, 'logout']);
// });

// yandex-market-partner-api/openapi/openapi.yaml
