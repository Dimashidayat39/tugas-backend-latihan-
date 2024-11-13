<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

// Rute API bawaan Laravel untuk mendapatkan user yang sedang login
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Rute API untuk resource Employee
Route::apiResource('employees', EmployeeController::class);

