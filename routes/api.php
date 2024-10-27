<?php

use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\Api\Equipment\LeaseEquipmentController;
use App\Http\Controllers\Api\HelperController;
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


Route::get('/roles', [HelperController::class, 'getRoles']);
Route::get('/genders', [HelperController::class, 'getGenders']);
Route::get('/categories', [HelperController::class, 'getCategories']);
Route::get('/sub-categories', [HelperController::class, 'getSubCategories']);
Route::get('/industries', [HelperController::class, 'getIndustries']);

Route::get('/lease-equipment', [LeaseEquipmentController::class, 'index']);
Route::get('/lease-equipment/{id}', [LeaseEquipmentController::class, 'show']);

Route::middleware('auth:sanctum')->post('/lease-equipment', [LeaseEquipmentController::class, 'store']);
Route::middleware('auth:sanctum')->put('/lease-equipment', [LeaseEquipmentController::class, 'update']);
