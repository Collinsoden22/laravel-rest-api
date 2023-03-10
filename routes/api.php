<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/", [UserController::class, 'index']);
Route::get("/user/{id?}", [UserController::class, 'getUser']);
Route::get("/user/", [UserController::class, 'get']);
Route::post("/create/", [UserController::class, "create"]);
Route::put("/update/", [UserController::class, "update"]);
Route::delete("/delete/", [UserController::class, "destroy"]);