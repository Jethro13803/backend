<?php

use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\CarouselItemController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/carousel', [CarouselItemController::class, 'index']);
Route::get('/carousel/{id}', [CarouselItemController::class, 'show']);
Route::post('/carousel', [CarouselItemController::class, 'store']);
Route::put('/carousel/{id}', [CarouselItemController::class, 'update']);
Route::delete('/carousel/{id}', [CarouselItemController::class, 'destroy']);

/*
user controller
*/

Route::get('/user', [UserController::class, 'index']);
Route::get('/user/{id}', [UserController::class, 'show']);
Route::post('/user', [UserController::class, 'store'])->name('user.store'); 
Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');
Route::put('/user/email/{id}', [UserController::class, 'email'])->name('user.email');
Route::put('/user/password/{id}', [UserController::class, 'password'])->name('user.password');
Route::delete('/user/{id}', [UserController::class, 'destroy']);