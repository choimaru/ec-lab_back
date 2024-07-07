<?php

use App\Http\Controllers\Api\EmployeeController;
use App\Http\Controllers\Api\GeneralCodeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource("/employee", EmployeeController::class);
Route::get("/category/{categoryCd}", [GeneralCodeController::class, "category"]);
