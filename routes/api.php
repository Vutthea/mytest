<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmployeeController;

Route::get('/employees', [EmployeeController::class, 'index']);
// Route::get('/employees',[App\Http\EmployeeController::class,'index']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
